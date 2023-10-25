<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor="red">
    <h1><?php
    $anapara=2500;
    $kazak=rand(150,250); //x2
    $sapka=rand(75,100);  //x2
    $etek=rand(250,350);  //x2
    $canta=rand(250,500);  //x1
    $ayakkabi=rand(500,750); //x1
    
    $alisveristutar=($kazak*2+$sapka*2+$etek*2+$canta+$ayakkabi);

    $fark=$anapara-$alisveristutar;
    

    if($fark<500)
    {
        $indirim=$alisveristutar-($alisveristutar*0.02);
        echo "toplam tutar=".$alisveristutar."indirimli rakam=".$indirim."kalan para=".($anapara-$indirim);
    }
    else if($fark>500&&$fark<1000)
    {
        $indirim=$alisveristutar-($alisveristutar*0.05);
        echo "toplam tutar=".$alisveristutar."indirimli rakam=".$indirim."kalan para=".($anapara-$indirim);
    }
    else if($fark>1000&&$fark<2000)
    {
        $indirim=$alisveristutar-($alisveristutar*0.08);
        echo "toplam tutar=".$alisveristutar."indirimli rakam=".$indirim."kalan para=".($anapara-$indirim);
    }
    else 
    {
        $indirim=$alisveristutar-($alisveristutar*0.10);
        echo "toplam tutar=".$alisveristutar."indirimli rakam=".$indirim."kalan para=".($anapara-$indirim);
    }





    
    
    ?>
    </h1>



    
</body>
</html>