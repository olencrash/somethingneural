<script>
  const firstButton = document.querySelector('.first');
  const audio = new Audio('https://github.com/olencrash/somethingneural/blob/1a781afb5b9c63b3dbcc64370c1c44cb015f857a/keftemecall.mp3');

  let isPlaying = false;

  firstButton.addEventListener('click', () => {
    if (!isPlaying) {
      audio.play();
      isPlaying = true;
      const player = document.createElement('audio');
      player.src = 'https://github.com/olencrash/somethingneural/blob/1a781afb5b9c63b3dbcc64370c1c44cb015f857a/keftemecall.mp3';
      player.controls = true;
      player.style.marginTop = '10px';
      firstButton.parentNode.insertBefore(player, firstButton.nextSibling);
    } else {
      audio.pause();
      isPlaying = false;
      const player = document.querySelector('audio');
      player.parentNode.removeChild(player); 
    }
  });
</script>
