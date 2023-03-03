<?php




$url = "https://www.instagram.com/graphql/query/?query_hash=b3055c01b4b222b8a47dc12b090e4e64&variables=%7B%22shortcode%22%3A%22Coho1NwJTzd%22%2C%22child_comment_count%22%3A3%2C%22fetch_comment_count%22%3A40%2C%22parent_comment_count%22%3A24%2C%22has_threaded_comments%22%3Atrue%7D";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Host: www.instagram.com",
   "accept: */*",
   "x-ig-www-claim: 0",
   "x-requested-with: XMLHttpRequest",
   "x-asbd-id: 198387",
   "x-csrftoken: feT0Sjm9bJKw6G68i3mararIMRxXQJV1",
   "user-agent: Mozilla/5.0 (Linux; Android 13; SM-G998B Build/TP1A.220624.014) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.5414.118 Mobile Safari/537.36",
   "x-ig-app-id: 1217981644879628",
   "sec-fetch-site: same-origin",
   "sec-fetch-mode: cors",
   "sec-fetch-dest: empty",
   "referer: https://www.instagram.com/reel/Coho1NwJTzd/?igshid=YmMyMTA2M2Y%3D",
   "accept-language: en-GB,en-US;q=0.9,en;q=0.8",
   "cookie: _js_datr=qCLvY3TDPqWQ8LnDkVqIFIfo",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
// var_dump($resp);

$json=json_decode($resp,true);
$video_url=$json['data']['shortcode_media']['video_url'];
echo $video_url;

?>
