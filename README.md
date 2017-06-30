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
