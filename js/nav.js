$(
  function()
  {
    $(".canSele").click(
      function()
      {
        window.location.href="?page="+$(this).attr("a1");
      }
    )
  }
)
