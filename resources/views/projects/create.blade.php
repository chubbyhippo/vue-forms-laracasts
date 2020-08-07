<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.css">

</head>

<body>
    <div class="container" id="app">
        @include('projects.list')
        <form action="/projects" method="post" @submit.prevent="onSubmit" @keydown="delete errors[$event.target.name]">

            <div class="control">
                <label for="name" class="label">Project Name:</label>
                <input type="text" name="name" id="name" class="input" v-model="name">

                <span class="help is-danger" v-if="errors['name']" v-text="errors['name']? errors['name'][0]: ''"></span>

            </div>

            <div class="control mb-3">
                <label for="description" class="label">Project Description:</label>
                <input type="text" name="description" id="description" class="input" v-model="description">

                <span class="help is-danger" v-if="errors['description']" v-text="errors['description']? errors['description'][0]: ''"></span>
            </div>

            <div class="control">
                <button class="button is-primary" :disabled="Object.keys(errors).length === 0 && errors.constructor === Object?false:true">Create</button>
            </div>

        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="/js/app.js"></script>

</body>

</html>
