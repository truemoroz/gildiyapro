$(document).ready(function () {

  // инициализация фильтров и пагинации

  var filtersConfig = {
    base_path: '/js/tablefilter/',
    paging: {
      // results_per_page: ['Records: ', [3]],
      length: 4,
    },
    col_2: 'select',
    col_3: 'select',
  };
  var tf = new TableFilter('tasks', filtersConfig);
  tf.init();


  // удаление задачи

  $('.tasks__delete').click(function () {
    if (confirm('Вы уверены что хотите удалить эту задачу?')) {
      const self = $(this);
      const id = self.data('id');
      $.ajax({
        type: "GET",
        url: "/tasks/delete/" + id,
        success: function () {
          console.log('ok');
          self.parent().parent().remove();
        },
        error: function () {
          console.log('error');
        }
      });
    }
  })

});