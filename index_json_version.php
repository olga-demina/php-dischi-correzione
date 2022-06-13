<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <title>Php Dischi</title>
    <link rel="stylesheet" href="css/style.css">


    <!-- Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- VueJs -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
</head>

<body>
    <div id="root">
        <header>
            <div class="container" id="header-container">
                <div class="header-left">
                    <img src="http://pluspng.com/img-png/spotify-logo-png-open-2000.png" alt="">
                </div>
                <div class="header-right">
                    <select v-model="genre" @change="getDiscs">
                        <option value="">All</option>
                        <option value="Rock">Rock</option>
                        <option value="Pop">Pop</option>
                        <option value="Jazz">Jazz</option>
                        <option value="Metal">Metal</option>
                    </select>
                </div>
            </div>
        </header>

        <main>
            <div class="container">
                <div id="discs-container">
                    <div class="disc" v-for="item in discs">
                        <img :src="item.poster" />
                        <h3>{{ item.title }}</h3>
                        <small>{{ item.author }}</small>
                        <strong>{{ item.year }}</strong>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="js/script.js"></script>
</body>


</html>