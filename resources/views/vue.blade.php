<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vue.js CDN</title>
</head>
<body>
    <div id="text">
    <form action="{{ route('post') }}" method="POST">
        @csrf
        <input type="text" name="text" v-model="text">
        <button type="submit">送信</button>
    </form>
        <button @@click="change">変更</button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script>
        let vue = new Vue({
            el: '#text',
            data(){
                return {
                    text: 'hello'
                }
            },
            methods: {
                change(){
                    this.text = 'changed'
                }
            }
        });

    </script>
</body>
</html>