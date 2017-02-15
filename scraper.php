<?php
require 'scraperwiki.php';
    require 'scraperwiki/simple_html_dom.php';
?>


<?php
$url="http://www.sozcu.com.tr/kategori/yazarlar/";
$html = scraperWiki::scrape( $url );

$dom = new simple_html_dom();
$dom->load($html);
foreach($dom->find("div[class='cas-inner']/a") as $data){
    print_r($data);
}




/*

$url="http://www.sozcu.com.tr/kategori/yazarlar/";
$html = scraperWiki::scrape( $url );

$dom = new simple_html_dom();
$dom->load($html);
foreach($dom->find("div[@align='left'] tr") as $data){
    $tds = $data->find("td");
    if(count($tds)==12){
        $record = array(
            'country' => $tds[0]->plaintext, 
            'years_in_school' => intval($tds[4]->plaintext)
        );
        print json_encode($record) . "\n";
        scraperwiki::save( array('country'), $record );
    }
}
*/











?>
