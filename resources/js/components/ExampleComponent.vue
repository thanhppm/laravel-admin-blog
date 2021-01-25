<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
                <div class="card">
                    <!-- <div class="card-header card-header-rose text-center">
                        <h4 class="card-title">Ngân hàng</h4>
                    </div> -->

                    <div class="card-body">
                        <div>{{ message }}</div>
                        
                        <button class="btn btn-success" @click="sayHello">
                            <span class="btn-label">
                                <i class="material-icons">check</i>
                            </span>
                            Click here
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                message: 'This is my first component using binding data'
            }
        },
        methods: {
            sayHello() {
                this.message = 'Hello world !';
            }
        }
    }
</script>
