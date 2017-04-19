<?php
/**
 * Created by PhpStorm.
 * User: 57130
 * Date: 18-04-2017
 * Time: 10:34
 */
?>
<div class="container-fluid">
    <div class="container">
<h1>Andet nyt</h1>
<h2>Leveret Af DR og Berlinske</h2>
        <br>
        <hr>
        <br>

        <h1>Top 10 Nyheder fra Berlinske!!</h1>
        <br>
        <br>

        <?php
        $html = "";
        $url = simplexml_load_file("http://www.berlingske.dk/rss/senestenyt.xml#");
        for ($i = 0; $i < 10; $i++){
            $title = $url->channel->item[$i]->title;
            $description = $url->channel->item[$i]->description;
            $link = $url->channel->item[$i]->link;

            $html .= "<div><h3>$title</h3><img src=\" '$url->enclusure[$i];' \"/>';<p>$description</p><p><a href='$link'>Læs mere</a></p></div>";
        }
        echo $html;
        ?>
    </div>
</div>