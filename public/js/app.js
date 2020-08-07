new Vue({
    el: "#app",
    data: {
        name: "",
        description: "",
        errors: {}
    },
    methods: {
        onSubmit() {
            console.log(this.errors);
            axios
                .post("/projects", this.$data)
                .then(response => alert("Success"))
                .catch(error => {
                    console.log(error.response.data);
                    this.errors = error.response.data.errors;
                });
        }
    }
});
