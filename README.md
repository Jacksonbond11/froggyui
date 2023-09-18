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
ffmpeg -i input.wav -filter:a loudnorm output.wav
```

```
ffmpeg -i file-it-want-to-shorten.wav -af silenceremove=stop_periods=-1:stop_duration=0.5:stop_threshold=-50dB ./output.wav
```
