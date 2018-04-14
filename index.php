<html>
    <head>
        <title>Si Lang Translator</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1>Bahasa Si</h1>
                </div>
            </div>
        </div>
        <div class="container">
            <form action="" type="get">
                <div class="row">
                    <div class="col-md-8">
                        <textarea class="form-control" row="5" type="si" name="si" placeholder="Masukan bahasa SI kamu"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <button type="submit" class="btn btn-default">Translate</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <?php
                        if(isset($_GET['si'])){
                            $sentences = explode(' ', $_GET['si']);

                            if(count($sentences) > 1){
                                echo '<strong>';
                                for($i=0; $i < count($sentences); $i++){
                                    $word = explode('si', $sentences[$i]);
                                    echo $word[1].$word[0]. ' ';
                                }
                                echo '</strong>';
                            }
                            else{
                                $word = explode('si', $_GET['si']);
                                echo '<strong>'.$word[1].$word[0].'</strong>';
                            }
                        }
                        ?>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>