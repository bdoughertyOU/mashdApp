<?php
$id_of_self_post = preg_replace('/.*_/', '', $data['id']);
$self_post_url = '/' .$id_of_self_post;
$self_origin_post = $facebook->api($self_post_url,'GET');
$vidoProfileImageId = $self_origin_post['from']['id'];
$videoProfileURL = $facebook->api('/' . $vidoProfileImageId . '?fields=picture','GET');
$videoProfileImg = $videoProfileURL['picture']['data']['url'];
  $name = $data['from']['name'];
$story = preg_replace('/'.$name.'/', "", $data['story']);
$id = $data['from']['id'];
echo "<div class='fbPostHead'><a class='fbUser' ng-click=\"goToFbUser('$id')\">$name</a>";
echo " ".$story."</div></div>";
  echo "<br/>";
                echo "<img src='$videoProfileImg'/> ";
                
                $videoUsername = $self_origin_post['from']['name'];
                echo $videoUsername;
                echo "<br/>";                
                if(isset($self_origin_post['description']))
                {
                  $videoMessage = $self_origin_post['description'];
                  echo "<div class='fbcontent'>".$videoMessage."</div>";
                }
                  $videoContent = $self_origin_post['embed_html'];
                  echo "<div class='newVideo'>";
                echo $videoContent;
                echo "</div>";
               
//var_dump($self_origin_post);
?>