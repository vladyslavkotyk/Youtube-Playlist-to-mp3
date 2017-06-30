<?php

define("API_KEY", "API_KEY");

if (isset($_POST['playlist']) && !empty($_POST['playlist'])) {

    echo json_encode($playlist = getPlaylist($_POST['playlist']));

}


function getPlaylist($playlist_id) {
    
    $api_key = API_KEY;
    $api_url = 'https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=50&playlistId='. $playlist_id . '&key=' . $api_key;
    $playlist = array();
    $playlist[] = json_decode(file_get_contents($api_url), true);
    $i = 0;
    
    if ($playlist[$i]['pageInfo']['resultsPerPage'] < $playlist[$i]['pageInfo']['totalResults']) {
        
        $token = $playlist[$i]['nextPageToken'];
        $i++;
        $api_url = 'https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&pageToken=' . $token . '&maxResults=50&playlistId='. $playlist_id . '&key=' . $api_key;
        $playlist[] = json_decode(file_get_contents($api_url), true);
    }
    $videos = array();
    foreach ($playlist as $search) {
        
        foreach ($search['items'] as $video_item) {
            
            $array['url'] = "https://www.youtube.com/watch?v=" . $video_item['snippet']['resourceId']['videoId'];
            $array['name'] = $video_item['snippet']['title'];
            $array['id'] = $video_item['snippet']['resourceId']['videoId'];
            $videos[] = $array;
        }
    }
    
    return $videos;
}




?>
