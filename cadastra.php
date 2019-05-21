<?php
    try{
        $conexao = mysql_connect("localhost","yohannan","","banco_mobile");
        
        $nome = $_GET['nome'];
        $email = $_GET['email'];
        $query = "";
        
        msqli_query($conexao,$query);
        
        echo "Cadastro realizado com sucessoooooo!";
    }catch
?>

<!--html>
    <head>
        <meta charset="utf8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta http-equiv="Content-Security-Policy" content="default-src * data: gap: https://ssl.gstatic.com; style-src * 'unsafe-inline'; script-src * 'unsafe-inline' 'unsafe-eval'">
        <link rel="stylesheet" href="components/loader.css">
        
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
          
        
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    </head>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        body{
            background-color: #C8C3C2;
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
          overflow: auto;
          position: absolute;
          top: 5.5%;
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
        #minha{
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
        #menu ul{
            background-color: #fff;
            padding: 20px;
            font-weight: bold;
            font-size: 150%;
            margin: 0;
            overflow: hidden;
        }
        #user{
            float: right;
        }
        div #nome{
            margin-left: 13%;
            float: left;
        }
        #menu div{
            display: inline;
        }
        div.container{
            border: 3.4px solid; /* As 4 bordas sólidas com 25px de espessura */
            border-color: black black black black; /* cores: topo, direita, inferior, esquerda */
            padding: 5px;
            width: 70%;
            height: 80%;
            background: #eee;
            overflow-x:  hidden;
            overflow-y: scroll;
            margin-left: 20%;
        }
        div.container::-webkit-scrollbar {
          width: 10px;
        }
        div.container::-webkit-scrollbar-thumb {
          border-radius: 5px;
          background: rgb(0, 0, 0,.1) 
        }
    </style>
    <body>
        
        <div id="menu">
                <ul>
                    <<img id="logo" src="img/logo.png"></img>>
                    <div id="nome">REQUEST</div>
                    <div id="user">Nome do Usuário</div>
                </ul>
            <a data-activates="slide-out" class="btn"><i class="material-icons">menu</i></a>
        </div>
        
        <div id="menu-lateral">
                <ul id="slide-out" class="side-nav fixed">
                    <div id="minha">Minha conta</div>
                    <li><div class="divider"></div></li>
                    <li><a href=""><img id="circle" src="img/circle.png"></img>Histórico</a></li>
                    <li><a href="">Perfil</a></li>
                    <li><a href="">Ajuda</a></li>
                </ul>
        </div>
        
        <div class="container">
            <div>
                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod facere eaque aperiam vero quo, corporis ut veritatis porro velit, ratione reiciendis, harum nostrum. Quam rem, quasi nobis expedita culpa ea?</div>
                <div>Debitis inventore ut, numquam! Esse odio tenetur aperiam repellendus iste pariatur sunt adipisci repudiandae voluptates illum, quidem, deleniti commodi officiis, sapiente delectus sequi ea inventore ratione eaque obcaecati? Facere, cupiditate.</div>
                <div>Aperiam, nesciunt enim aut et perferendis molestiae impedit quas, quae rerum eaque architecto obcaecati sunt, eveniet odio laboriosam. Laboriosam, rem ex officia eius. Cum eveniet, magnam nostrum in provident, quaerat.</div>
                <div>Tenetur praesentium nesciunt minus quis voluptas ut laudantium quibusdam magnam tempora porro ipsum expedita consequuntur, ratione minima, eligendi assumenda unde, culpa labore, ducimus explicabo aliquid natus dignissimos odio? Culpa, consequuntur?</div>
                <div>Nemo eius beatae eum quos, maxime, ullam, at laudantium sed alias pariatur amet. Voluptatem ipsam, nobis totam sed, et tenetur. Laboriosam quis illo quo harum, dolorum nobis fugit blanditiis optio.</div>
                <div>Quasi deserunt quas modi, officiis accusantium labore sequi quod numquam ex accusamus error dicta unde nihil repellendus veritatis amet repudiandae doloremque doloribus velit quos aut nulla nostrum. Obcaecati, quidem, quae.</div>
                <div>Inventore quae dolorem, delectus dolor! Cum quis quasi similique repellendus velit reprehenderit itaque molestiae et labore natus recusandae, dicta culpa iusto temporibus fugit, odio autem non unde quas. Est, blanditiis.</div>
                <div>Ipsam natus, velit veniam rem sunt, deserunt. Laboriosam iste tempora labore dolor, molestias, iusto quia perspiciatis eum illum minima voluptate nemo! Reprehenderit rerum, corporis pariatur quibusdam, nemo minus atque ducimus!</div>
                <div>Debitis magni quaerat, laborum, magnam placeat provident cum cumque quisquam odio qui accusantium inventore optio dolores dignissimos fugit minus alias id! Maiores eaque soluta tempore praesentium nesciunt quis delectus a.</div>
                <div>Reiciendis mollitia rem minus fugiat laboriosam delectus assumenda, est quis, magnam excepturi atque, saepe optio facere velit, quas nostrum placeat! Tempora inventore omnis, aspernatur repellat temporibus autem ab provident optio.</div>
                <div>Magni possimus consequatur voluptate amet reiciendis tempora perspiciatis incidunt temporibus dignissimos repellendus sequi quasi facere commodi deleniti nihil, facilis modi! Quidem quo libero laudantium ratione, obcaecati facere eaque illum sint.</div>
                <div>Ratione, aut harum vel! Quas, impedit recusandae ex ab, distinctio non architecto dolore at sed, voluptates tempora ratione et quidem suscipit dolor eum totam rerum. Quisquam dignissimos, a recusandae? Eum.</div>
                <div>Assumenda, dolor provident! Voluptates itaque dolor, magni vitae nam autem quos ipsam placeat esse dolorum nulla delectus velit praesentium ex? Ipsam minus inventore totam ex sapiente facilis quos, expedita labore.</div>
                <div>Ullam itaque aspernatur quidem magnam ipsa cum deleniti ea, necessitatibus non, repudiandae in. Reiciendis soluta, dolorum sint voluptas rem repellendus porro veniam natus dicta recusandae provident assumenda magnam eius? Molestiae.</div>
                <div>Saepe modi inventore aliquid perferendis, at error, blanditiis repellat distinctio non expedita hic voluptas quidem quos magni voluptatum reprehenderit. Doloribus voluptatum inventore qui, possimus nesciunt numquam nostrum iusto vero voluptatibus.</div>
                <div>Iste quidem sapiente odit mollitia, cumque, nesciunt est expedita ad ducimus, saepe, pariatur numquam quia quam harum ipsam deserunt minus voluptas maxime. Dicta impedit molestias tempore ipsam optio quia odio?</div>
                <div>Totam unde nobis ipsum tenetur rerum pariatur sit repellat ex dolorem consequatur. Animi eum quis, unde odio maiores in vel, ea hic ut enim, nostrum nihil sit atque assumenda veniam!</div>
                <div>Accusamus nisi, quod neque quae nesciunt repudiandae laudantium, nostrum molestiae asperiores est aliquam, molestias excepturi officia dolor. Odit, minima? Minus cum beatae pariatur architecto, impedit reiciendis dolor numquam perferendis eius!</div>
                <div>Dolore molestiae alias quam corporis ipsum voluptas impedit quas odit quisquam sit, nisi sapiente doloremque voluptatum, quo delectus dolor. Assumenda esse illo nisi, praesentium dolorum, sapiente quo reprehenderit magnam. Reprehenderit!</div>
                <div>Nisi vel quibusdam facere veritatis at ratione sunt, autem non recusandae in velit aliquam modi sit expedita minus assumenda explicabo blanditiis repellendus. Iste culpa laudantium quasi consequuntur laborum nesciunt repudiandae!</div>
                <div>Distinctio aut alias ipsam optio enim, dolore earum obcaecati unde fuga! Voluptatibus fugiat magni ipsum debitis, eligendi ab impedit aliquam similique officiis adipisci suscipit doloremque porro animi, explicabo dolorum inventore!</div>
                <div>Provident deserunt non eligendi, necessitatibus aliquid reprehenderit officiis magni quibusdam minima ea nostrum ullam voluptates quia cum magnam. Rem doloribus deleniti possimus dignissimos, maiores excepturi voluptas nemo voluptate pariatur quod.</div>
                <div>Quis, saepe, hic! Consequuntur magnam suscipit voluptatem ea maxime reiciendis asperiores, harum repellat sint aspernatur repellendus laudantium minus nam. Dignissimos rerum libero corrupti accusantium ipsum iste doloribus eligendi amet reprehenderit!</div>
                <div>Quod, ut error amet dolorem tempore omnis tempora officiis natus in distinctio, iusto nisi ullam rerum similique qui sapiente optio totam id earum quos? Sit recusandae tenetur, voluptates necessitatibus veniam?</div>
                <div>Aliquid dignissimos earum commodi quia repudiandae, dicta ex voluptas iure in velit soluta fuga mollitia nemo qui quos, iusto veniam eum quisquam consectetur reiciendis illum rerum possimus. Ab, molestias, unde.</div>
                <div>Tempora, architecto. Temporibus quas amet numquam quisquam commodi facere tempore accusamus cupiditate ipsum! Expedita quo sapiente velit asperiores qui, praesentium libero vero vel, culpa totam numquam natus error harum a.</div>
                <div>Quaerat ab, dolores nam, amet tempore illum, iure fugit et facilis impedit ipsam, ipsa accusantium error labore? Necessitatibus at repellendus vel, delectus commodi in numquam ut expedita illo est, recusandae.</div>
                <div>Placeat laboriosam dolorum nulla optio doloremque reprehenderit, expedita totam non. Perferendis repudiandae, suscipit dolor delectus cumque voluptate voluptates blanditiis libero dolorem non quam ratione nesciunt pariatur provident eos unde cum!</div>
                <div>Ipsam obcaecati error sunt vel, dolores voluptate, eos veritatis perferendis accusantium recusandae quisquam, iste ab quasi. Sequi deserunt, rem, culpa blanditiis doloremque totam illo, nihil enim placeat sed dolor nulla!</div>
                <div>Cupiditate, iusto, vel! Nesciunt necessitatibus et non, enim culpa reprehenderit facere illo vel perferendis consequatur. Ratione quibusdam incidunt ducimus repellat modi ab nesciunt cumque voluptatum officia, quam ipsam asperiores doloribus.</div>
            </div>
        </div>
        <script>
            $(document).ready(function(){
                $(".btn").sideNav();
            });
        </script>
    </body>
</html-->