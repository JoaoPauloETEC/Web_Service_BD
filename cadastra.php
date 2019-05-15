
<html>
    <head>
        <meta charset="utf8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta http-equiv="Content-Security-Policy" content="default-src * data: gap: https://ssl.gstatic.com; style-src * 'unsafe-inline'; script-src * 'unsafe-inline' 'unsafe-eval'">
        <link rel="stylesheet" href="components/loader.css">
        <script src="components/loader.js"></script>
    </head>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        body{
            background-color: #eee;
            padding: 0;
            margin: 0;
            font-family: Arial;
        }
        #menu-lateral ul {
          list-style-type: none;
          margin: 0;
          padding: 0;
          width: 200px;
          background-color: #16171b;
          height: 100%;
          position: fixed;
          overflow: auto;
        }
        #menu-lateral li a {
          display: block;
          padding: 20px;
          text-align: center;
          font-size: 18px;
          color: #fff;
          text-decoration:none;
        }
        #menu-lateral li a:hover{
            background-color: grey;
        }
        nav #minha{
           display: block;
           padding: 18px;
           text-align: center;
           font-size: 15px;
           font-weight: bold;
           color: #fff;
        }
        hr{
            border-color: grey;
        }
        #circle{
            width: 20px;
            height: 15px;
            margin-right: 5%;
        }
        #menu{
            background-color: #fff;
            padding: 20px;
            font-weight: bold;
            font-size: 30px;
            margin: 0;
            list-style-type: none;
        }
        nav #user{
            float: right;
        }
        #logo{
            width: 20px;
            height: 20px;
        }
        #menu div{
            display: inline;
        }
    </style>
    <body>
        
        <div>
            <nav id="menu">
                <ul>
                    <img id="logo" src="webservice/img/logo.png"></img>
                    <div id="nome">REQUEST</div>
                    <div id="user">Nome do Usuário</div>
                </ul>
            </nav>
        </div>
        
        <div>
            <nav id="menu-lateral">
                <ul>
                    <div id="minha">Minha conta</div>
                    <hr>
                    <li><a href=""><img id="circle" src="webservice/img/circle.png"></img>Histórico</a></li>
                    <li><a href="">Perfil</a></li>
                    <li><a href="">Ajuda</a></li>
                </ul>
            </nav>
        </div>
        
    </body>
</html>