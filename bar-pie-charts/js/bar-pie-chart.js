jQuery(document).ready(function() {

  var i = 0;
  jQuery('.bpc-circle-chart').each(function() {
    var id = 'chart' + i;
    jQuery(this).attr('id', id);
    bpc_drawCircleChart('#' + id);
    i++;
  })

  jQuery('.bpc-circle-chart').click(function() {
    var thisId = jQuery(this).attr('id');
    bpc_drawCircleChart('#' + thisId);
  })

  function bpc_drawCircleChart(id) {
    jQuery(id).empty().append("<p style='color:" + jQuery(id).data('color') + "'>" + jQuery(id).data('percent') + "%</p>");
    bpc_addOneBar(id);
      
    jQuery("head").append(jQuery('<style>div .' + jQuery(id).data('barname') + ':after { background: ' + jQuery(id).data('color') + ' !important; }</style>'));
  }

  function bpc_addOneBar(id) {
      var percent = jQuery(id).data('percent');
      var noOfBars = .36 * percent;
      if (jQuery(id).children().length - 1 < noOfBars) {
       jQuery(id).append('<div class="bar ' + jQuery(id).data('barname') + '"></div>');
       setTimeout(function() {
        bpc_addOneBar(id);
      }, 30);
    }
  }
})