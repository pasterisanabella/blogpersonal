<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blog - Anabella Pasteris</title>
    <link rel="stylesheet" href="./css/layout.css">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <container id="main-container">
        <header class="navbar">
            <div class="navbar-option">
                <img id="profile-picture" src="./archivos/foto.jpg" />
            </div>
            <?php>
                $dbhost = '192.168.77.224';
                $port = 5432;
                $dbname='blog-db';
                $dbuser = 'postgres';
                $dbpass = 'ana123456';
            
                $dbconn = pg_connect("host=$dbhost port=$port dbname=$dbname user=$dbuser password=$dbpass");
                if (!$dbconn) {
                    echo "An error occurred.\n";
                    exit;
                }
            
                $query = 'SELECT * FROM Alumnos';
                $result = pg_query($query);
                if (!$result) {
                    echo "An error occurred.\n";
                    exit;
                }

                $row = pg_fetch_row($result);
                
                echo "<div class="content-section-about">
                    <h3 class="red-text">$row[1]</h3>
                    <p class="paragraph-text info-text">
                        $row[2]
                    </p>
                    <p class="paragraph-text info-text">
                        $row[3]
                    </p>
                </div>    
                ";
            ?>   
        </header>
        <div id="body">
            <main id="content">
                <div class="background-container">
                    <div class="content-section content-section-background">
                        <h1 class="section-title-l">Sobre mí</h1>
                    </div>
                    <div class="content-section content-section-background description-section">
                        <ul>
                        <?php
                            $dbhost = '192.168.77.224';
                            $port = 5432;
                            $dbname='blog-db';
                            $dbuser = 'postgres';
                            $dbpass = 'ana123456';
                        
                            $dbconn = pg_connect("host=$dbhost port=$port dbname=$dbname user=$dbuser password=$dbpass");
                            if (!$dbconn) {
                                echo "An error occurred.\n";
                                exit;
                            }
                        
                            $query = 'SELECT * FROM Datos WHERE AlumnoId=1';
                            $result = pg_query($query);
                            if (!$result) {
                                echo "An error occurred.\n";
                                exit;
                            }
                        
                            while ($row = pg_fetch_row($result)) {
                                echo "<li>$row[1]</li>";
                                echo "<br/>\n"
                            }
                        
                            pg_free_result($result);
                            pg_close($dbconn);
                        ?>
                        </ul>
                    </div>
                </div>
                <div class="background-container">
                    <div class="content-section content-section-background">
                        <h1 class="section-title-l">Trabajo Práctico Final</h1>
                    </div>
                    <div class="content-section content-section-background description-section">
                        <p class="paragraph-text">Trabajo práctico final de Virtualización y Consolidación de Servidores.</p>
                        <p class="paragraph-text">Describe el despliegue de un blog usando contenedores de LXC en la plataforma Proxmox.</p>
                    </div>
                    <div class="content-section content-section-background">
                        <p class="info-text-big">
                            <a class="info-link info-link-big" target="_blank" href="./trabajo/52533.pdf">Descargar Archivo</a>
                        <p>
                    </div>
                </div>
            </main>
        </div>
        <footer class="layout">
        </footer>
    </container>
</body>
</html>