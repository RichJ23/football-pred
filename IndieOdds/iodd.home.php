<!DOCTYPE html>


<html>

<head>
	<link rel="stylesheet" type="text/css" href="iodd.css" />
</head>

<body>




<dev class="mast">
		<h1 class="masth11">	iOdd.com  </h1>
		<h1 align="right" class="masth12">	Independent football odds   </h1>
</dev>



<dev class="menubar">

    <nav class="menu">
        <ul class="clearfix">
            <li><a href="#">Home</a></li>
            <li>
                <a href="#">Leagues <span class="arrow">&#9660;</span></a>
 
                <ul class="sub-menu">
                    <li>
                    	<a href="#">England</a>
						
						<ul class="sub-sub-menu">
		                    <li><a href="#">Premier League</a></li>
                		    <li><a href="#">Champiionship</a></li>
        		            <li><a href="#">League 1</a></li>
		                    <li><a href="#">League 2</a></li>                    
						</ul>
                    </li>


                    <li><a href="#">Spain</a></li>
                    <li><a href="#">Germany</a></li>
                    <li><a href="#">Holland</a></li>
                    <li><a href="#">France</a></li>
                    <li><a href="#">Scotland</a></li>
                </ul>
            </li>
            <li><a href="#">Stats</a></li>
            
        </ul>
    </nav>

</dev>



	<h1 class="h1div">  PREMIER LEAGUE </h1>







	<?php 

	$fh = fopen('Predictions/game.pred.prem.txt','r');

	$output = "<table class='predTable'>";

	while ($line = fgets($fh)) {
		$list = explode("@", $line);
		$output .= "<tr> <td>$list[1]</td> <td>$list[2]</td> <td>$list[3]</td> <td>$list[4]</td>  <td>$list[5]</td> <td>$list[6]</td> <td>$list[7]</td>  </tr>";
	}
	fclose($fh);

	$output .= '</table>';
	echo $output;
		?>



  

    <?php 

    $fh = fopen('Predictions/ind.game.prem.txt','r');

    $id = 0;
    $firstln = 0;
    $lastln = 3;


    $secln = 5;
    $seclastln = 8;


    while ($line = fgets($fh)) {

        if($id >= $firstln ){
            if($id <= $lastln ){

                $list = explode("@", $line);

                if($id == $firstln){

                    $title = "<h2 class='gameTitle' Tabindex='0' >";
                    $title .= "$list[0]";
                    $title .= " ";
                    $title .= "$list[3]";
                    $title .= " ";
                    $title .= "$list[4]";
                    $title .= "<span class='arrow2'> &#9660 </span>";
                    $title .= "</h2>";
                    echo $title;

                    $output = "<table class='indTable'>";
                }


                $output .= "<tr> <td>$list[0]</td> <td>$list[1]</td> <td>$list[2]</td> <td>$list[3]</td> <td>$list[4]</td> <td>$list[5]</td> <td>$list[6]</td> <td>$list[7]</td> <td>$list[8]</td> <td>$list[9]</td> <td>$list[10]</td> <td>$list[11]</td> <td>$list[12]</td>  </tr>";
            }
        }

        if($id==$lastln){
            $output .= '</table>';
            echo $output;
        }




        if($id >= $secln ){
            if($id <= $seclastln ){

                $list = explode("@", $line);

                if($id == $secln){

                    $title = "<h2 class='gameTitle' Tabindex='0' >";
                    $title .= "$list[0]";
                    $title .= " ";
                    $title .= "$list[3]";
                    $title .= " ";
                    $title .= "$list[4]";
                    $title .= "<span class='arrow2'> &#9660 </span>";
                    $title .= "</h2>";
                    echo $title;

                    $output = "<table class='indTable'>";
                }

                $output .= "<tr> <td>$list[0]</td> <td>$list[1]</td> <td>$list[2]</td> <td>$list[3]</td> <td>$list[4]</td> <td>$list[5]</td> <td>$list[6]</td> <td>$list[7]</td> <td>$list[8]</td> <td>$list[9]</td> <td>$list[10]</td> <td>$list[11]</td> <td>$list[12]</td>  </tr>";
            }
        }

        if($id==$seclastln){
            $output .= '</table>';
            echo $output;
        }

        $id++;
    }
    fclose($fh);


    ?>



</body>

</html>