# Froggy UI

## Styles

- https://daisyui.com/
- https://tailwindcss.com/

## Javascript

- As little as possible

## Laravel

- https://laravel.com/

## Audio manipulation

```
ffmpeg -i file.mp3 -filter:a loudnorm file-loudnorm.mp3 && \
    ffmpeg -i file-loudnorm.mp3 -af silenceremove=stop_periods=-1:stop_duration=0.5:stop_threshold=-50dB file-silenceremove.mp3 && \
    ffmpeg -i file-silenceremove.mp3 -filter:a "volume=2" file-loud.mp3
```
