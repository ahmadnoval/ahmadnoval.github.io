var selectedRow = null;
function onFormSubmit(e){
	event.preventDefault();
	var formData = readFormData();
	if (selectedRow === null) {
		insertNewRecord(formData);
	}else{
		updateRecord(formData);
	}
	resetForm();
}

function readFormData() {
	var formData = {};
	formData["fullName"] = document.getElementById("fullName").value;
	formData["empCode"] = document.getElementById("empCode").value;
	formData["salary"] = document.getElementById("salary").value;
	formData["city"] = document.getElementById("city").value;
	return formData;
}

function insertNewRecord(data) {
	var table = document.getElementById("employeeList").getElementsByTagName('tbody')[0];
	var newRow = table.insertRow(table.length);
	var cell1 = newRow.insertCell(0);
		cell1.innerHTML = data.fullName;
	var cell2 = newRow.insertCell(1);
		cell2.innerHTML = data.empCode;
	var	cell3 = newRow.insertCell(2);
		cell3.innerHTML = data.salary;
	var cell4 = newRow.insertCell(3);
		cell4.innerHTML = data.city;
	var cell5 = newRow.insertCell(4);
		cell5.innerHTML = `<a href="#" onClick='onEdit(this)'>Edit</a>
						   <a href="#" onClick='onDelete(this)'>delete</a>`;
}

function onEdit(td) {
	selectedRow = td.parentElement.parentElement;
	document.getElementById("fullName").value = selectedRow[0].innerHTML;
	document.getElementById("empCode").value = selectedRow[1].innerHTML;
	document.getElementById("salary").value = selectedRow[2].innerHTML;
	document.getElementById("city").value = selectedRow[3].innerHTML;
}

function updateRecord(formData) {
	selectedRow.cell[0].innerHTML = formData.fullName;
	selectedRow.cell[1].innerHTML = formData.empCode;
	selectedRow.cell[2].innerHTML = formData.salary;
	selectedRow.cell[3].innerHTML = formData.city;
}

function onDelete(td) {
	if (confirm('are you sure you want to delete this record?')) {
		row = td.parentElement.parentElement;
		document.getElementById('employeeList').deleteRow(row.rowIndex);
		resetForm();
	}
}