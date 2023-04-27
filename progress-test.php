<div class="progress-bar-container">
  <div class="progress-bar"></div>
</div>
<div class="progress-arrow"></div>


<style>
 .progress-bar-container {
  position: relative;
  width: 100%;
  height: 20px;
  background-color: red;
  border-radius: 10px;
  overflow: hidden;
}

.progress-bar {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  background-color: #000;
  width: 0;
  transition: width 0.5s ease-in-out;
}

.progress-arrow {
  position: absolute;
  top: -2px;
  left: 0;
  z-index: 10000;
 /*  background-color: ; */
  /* border-radius: 50%; */
  color: #fff;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: bold;
  transition: left 0.5s ease-in-out;
  border-top: 20px solid transparent;
  border-bottom: 20px solid transparent;
  border-right: 20px solid #000;
  transform: rotate(360deg);
  width: 0;
  height: 0;
}

</style>


<?php $percent = 75; ?>

<script>
  var progressBar = document.querySelector('.progress-bar');
  var progressArrow = document.querySelector('.progress-arrow');
  var percent = 0;
  var arrowValue = document.createTextNode(percent + '%');
  var isIncreasing = true;

  function updateProgressBar() {
    progressBar.style.width = percent + '%';
    progressArrow.style.left = percent + '%';
    progressArrow.innerHTML = '';
    progressArrow.appendChild(arrowValue);
  }

  updateProgressBar();

  setInterval(function() {
    if (isIncreasing) {
      percent++;
    } else {
      percent--;
    }

    if (percent == <?php echo $percent; ?> ) {
      percent = 0;
    }

    arrowValue.nodeValue = percent + '%';
    updateProgressBar();
  }, 100);
</script>
