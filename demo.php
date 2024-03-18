<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Auto Fill Form</title>
<style>
    form {
        max-width: 400px;
        margin: 0 auto;
    }
    input[type="text"] {
        width: 100%;
        margin-bottom: 10px;
    }
    input[type="submit"] {
        display: block;
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        cursor: pointer;
    }
</style>
</head>
<body>

<form id="searchForm">
    <label for="id">Enter ID:</label>
    <input type="text" id="id" name="id" required>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" readonly>
    <label for="email">Email:</label>
    <input type="text" id="email" name="email" readonly>
    <input type="submit" value="Search">
</form>

<script>
    // Simulated data
    const data = {
        "123": {
            "name": "John Doe",
            "email": "john@example.com"
        },
        "456": {
            "name": "Jane Smith",
            "email": "jane@example.com"
        }
    };

    document.getElementById('searchForm').addEventListener('submit', function(event) {
        event.preventDefault();
        const id = document.getElementById('id').value;
        if (data[id]) {
            document.getElementById('name').value = data[id].name;
            document.getElementById('email').value = data[id].email;
        } else {
            alert('ID not found!');
        }
    });
</script>

</body>
</html>
