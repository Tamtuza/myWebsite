(function($) {

  var $slides = $('.slide'),
    max = $slides.length - 1,
    center = 1,
    classNames = '';

  $('#wrap').on('click', function(e) {
    // Was a btn clicked?
    if (e.target.parentNode.className === 'btn') {
      // Update center position depending on which button was pressed
      switch (e.target.parentNode.id) {
        case 'btn-left':
          center = rotate(center - 1, max);
          $slides.parent().attr('class', 'sliding-left');
          break;
        case 'btn-right':
          center = rotate(center + 1, max);
          $slides.parent().attr('class', 'sliding-right');
          break;
      }

      // Update each slides class names
      $slides.each(function(i) {
        classNames = 'slide';
        switch (i) {
          case rotate(center - 1, max):
            classNames += ' slide-left';
            break;
          case rotate(center, max):
            classNames += ' slide-center';
            break;
          case rotate(center + 1, max):
            classNames += ' slide-right';
            break;
        }
        this.className = classNames;
      });
    }
  });

  /**
   * Returns the rotated index within a range
   */
  function rotate(i, max) {
    if (i < 0) return max;
    if (i > max) return 0;
    return i;
  }

}(jQuery));