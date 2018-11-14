/* eslint-disable no-undef,indent */
$(document).ready(function () {
  $('.sidenav').sidenav();
  $('.modal').modal();
  $('.tooltipped').tooltip({
      transitionMovement : 0,
      margin: 0
  });
  $('.fixed-action-btn').floatingActionButton();
});