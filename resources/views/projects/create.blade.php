<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.css">

</head>

<body class="container">
    <form action="/projects" method="post">

        <div class="control">
            <label for="name" class="label">Project Name:</label>
            <input type="text" name="name" id="name" class="input">
        </div>

        <div class="control">
            <label for="description" class="label">Project Description:</label>
            <input type="text" name="description" id="description" class="input">
        </div>

        <div class="control">
            <button class="button is-primary">Create</button>
        </div>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="/js/app.js"></script>
</body>


</html>
