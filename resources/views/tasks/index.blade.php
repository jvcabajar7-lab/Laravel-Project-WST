<!DOCTYPE html>
<html>

<head>

    <title>Task Management System</title>

    <style>

        body {
            font-family: Arial;
            background-color: lightgray;
             background: #f4f6f8;
             color: #1f2937;
              min-height: 100vh;
        }

        .container {
            width: 550px;
            margin: 30px auto;
            background-color: white;
            padding: 20px;
            border: 1px solid black;
            color: black;
            
        }

        h1 {
            font-size: 30px;
             margin-bottom: 8px;
        }

        input, textarea {
            width: 95%;
            padding: 10px;
            margin-bottom: 10px;
            color: grey;
        }

        textarea {
            height: 70px;
        }

        button {
            padding: 8px 12px;
            margin: 3px;
            cursor: pointer;
            color: black;
        }

        .task {
            border: 1px solid black;
            padding: 10px;
            margin-top: 10px;
        }

        .pending {
            background-color: lightyellow;
        }

        .completed {
            background-color: lightgreen;
        }

        .task p {
            margin: 5px 0;
        }

    </style>

</head>


<body>

    <div class="container">

        <h1>Task Management System</h1>


        <h3>Add Task</h3>

        
        <input
            type="text"
            id="taskName"
            placeholder="Enter task name"
        >


        
        <textarea
            id="taskDescription"
            placeholder="Enter task description"
        ></textarea>


        
        <input
            type="date"
            id="taskDate"
        >


        <button onclick="addTask()">
            Add Task
        </button>


        <h3>My Tasks</h3>

        <div id="taskList"></div>

    </div>


    <script>

        
        var tasks = [];


        
        function addTask() {

            var name =
                document.getElementById("taskName").value;

            var description =
                document.getElementById("taskDescription").value;

            var date =
                document.getElementById("taskDate").value;


            if (name == "") {

                alert("Please enter a task name.");

                return;

            }


            
            tasks.push({

                name: name,

                description: description,

                date: date,

                status: "Pending"

            });


            
            document.getElementById("taskName").value = "";

            document.getElementById("taskDescription").value = "";

            document.getElementById("taskDate").value = "";


           
            showTasks();

        }


       
        function showTasks() {

            var list =
                document.getElementById("taskList");


            
            list.innerHTML = "";


           
            for (var i = 0; i < tasks.length; i++) {

                var task = tasks[i];


                var box =
                    document.createElement("div");


                
                if (task.status == "Completed") {

                    box.className = "task completed";

                } else {

                    box.className = "task pending";

                }


                box.innerHTML =

                    "<b>Task:</b> " +
                    task.name +

                    "<p><b>Description:</b> " +
                    task.description +
                    "</p>" +

                    "<p><b>Due Date:</b> " +
                    task.date +
                    "</p>" +

                    "<p><b>Status:</b> " +
                    task.status +
                    "</p>" +

                    "<button onclick='editTask(" +
                    i +
                    ")'>Edit</button>" +

                    "<button onclick='deleteTask(" +
                    i +
                    ")'>Delete</button>" +

                    "<button onclick='changeStatus(" +
                    i +
                    ")'>Change Status</button>";


                list.appendChild(box);

            }

        }


        
        function editTask(index) {

            var newName =
                prompt(
                    "Enter new task name:",
                    tasks[index].name
                );


            if (newName == null || newName == "") {

                return;

            }


            var newDescription =
                prompt(
                    "Enter new description:",
                    tasks[index].description
                );


            var newDate =
                prompt(
                    "Enter new date:",
                    tasks[index].date
                );


           
            tasks[index].name = newName;

            tasks[index].description = newDescription;

            tasks[index].date = newDate;


            
            showTasks();

        }


        function deleteTask(index) {

            var answer =
                confirm("Do you want to delete this task?");


            if (answer == true) {

                tasks.splice(index, 1);

                showTasks();

            }

        }


        
        function changeStatus(index) {

            if (tasks[index].status == "Pending") {

                tasks[index].status = "Completed";

            } else {

                tasks[index].status = "Pending";

            }


            showTasks();

        }

    </script>

</body>

</html>