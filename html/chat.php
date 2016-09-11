
<!doctype html>
<html>
<head>
    <title>Liang Liu</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Liang Liu Homepage"/>
    <meta name="keyword" content="Liang Liu UM AE CS Web developer">
    <link href = "../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/jquery-ui.theme.css" rel="stylesheet">
    <link href="../css/lightslider.css" rel="stylesheet">
    <link rel="icon" href="../img/icon.jpeg">

    <style type="text/css">
    body{
        padding-top: 50px;
        padding-bottom: 20px;
        background-image: url("../img/letter.jpg");
    }

    #email_form{
        margin-top: 40px;
    }

    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src = "../javascript/bootstrap.min.js"></script>
    <script type="text/javascript" src="../javascript/lightslider.js"></script>
    <script type="text/javascript" src="../javascript/my_lightslider.js"></script>
</head>

<body>
    <nav class ="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class = "navbar-header">
                <a href="../index.html" class="navbar-brand"><span class="glyphicon glyphicon-home"></span></a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target = "#navbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div id="navbar" class="collapse navbar-collapse">
                <ul class = "nav navbar-nav">
                    <li><a href="about_me.html">About Me</a></li>
                    <li><a href="web_game.html">Web Game Demo</a></li>
                    <li><a href="project.html">Project Exhibition</a></li>
                    <li class = "active"><a href="chat.php">Chat Room</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class = "container" id = "email_form">
        <row>
            <div class = "col-md-2"></div>
            <div class = "col-md-8">
            <form>
                  <div class="form-group">
                    <label for="InputEmail">Email address</label>
                    <input type="email" class="form-control" id="InputEmail" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label for="InputTitle">Title</label>
                    <input type="text" class="form-control" id="InputTitle" placeholder="Title">
                  </div>
                  <div class="form-group">
                    <label for="InputContent">Content</label>
                    <textarea class="form-control" rows="15" id="InputContent" placeholder="To Liang Liu:"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary center-block">Send</button>
            </form>
            </div>
            <div clas = "col-md-2"></div>
        </row>
    </div>

    <div>
        <?php
            $emailTo = "liuliang@umich.edu";
            $subject = "hello";
            $body = "how are you doing!";
            $headers = "From: 13003206393@163.com";
            mail($emailTo, $subject, $body, $headers);
                echo "Mail sent";
            }else{
                echo "Failure";
            }
        ?>
    </div>

    <div class = "container">
        <footer>
            <p>&copy; 2016 Liang Liu</p>
        </footer>
    </div>
</body>