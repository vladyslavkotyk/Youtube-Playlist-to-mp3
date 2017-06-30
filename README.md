# Youtube-Playlist-to-mp3

Transfer your favourite musics from a youtube playlist with php and youtubedl

Dependencies
  - youtube-dl
  - ffmpeg


# How to install (ubuntu) !

FFMPEG
```sh
sudo add-apt-repository ppa:mc3man/trusty-media
sudo apt-get update
sudo apt-get dist-upgrade
sudo apt-get install ffmpeg
```

Youtube-dl
```sh
sudo add-apt-repository ppa:nilarimogard/webupd8
sudo apt-get update
sudo apt-get install youtube-dl
```

app-php
```sh
 change define("API_KEY", "YOU_API_KEY"); ( YOU_API_KEY to your google youtube api )
```

download.php
```sh
 change define("DIRECTORY", "/home/ubuntu/workspace/cache/"); to your cache directory and create it
```

### Todo
    - Add error checking
    - Clean the code
    
### How to use it

```
1. Go to a youtube playlist and copy the GET Parameter (list)
www.youtube.com/watch?v=0KSOMA3QBU0&list=PLMC9KNkIncKtPzgY-5rmhvj7fax8fdxoj
2. list = PLMC9KNkIncKtPzgY-5rmhvj7fax8fdxoj
3. And paste on the input and press Process Playlist
```
