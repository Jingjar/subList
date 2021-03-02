<script src="js/jquery-1.9.1.min.js"></script>
<p>目前位置 : 首頁 > 分類網誌 > <span class="nav"></span></p>
<fieldset style="display: inline-block;width:15%;vertical-align:top;">
    <legend>分類網誌</legend>
    <a style="display:block;margin:10px" href="javascript:getlist(1)">健康新知</a>
    <a style="display:block;margin:10px" href="javascript:getlist(2)">菸害防治</a>
    <a style="display:block;margin:10px" href="javascript:getlist(3)">癌症防治</a>
    <a style="display:block;margin:10px" href="javascript:getlist(4)">慢性病防治</a>
</fieldset>
<fieldset style="display: inline-block;width:75%;">
    <legend>文章列表</legend>
    <div class="list"></div>
    <div class="post"></div>
</fieldset>
<script>
    let item = ['健康新知',
        '菸害防治',
        '癌症防治',
        '慢性病防治'
    ]
    getlist(1)
    function getlist(i){
        $('.nav').html(item[i-1])
        $.get('api/getlist.php',{i},function(re){
            $('.list').html(re)
            $('.list').show()
            $('.post').hide()
        })
    }
    function getpost(id){
        
        $.get('api/getpost.php',{id},function(re){
            $('.post').html(re)
            $('.post').show()
            $('.list').hide()
        })
    }
</script>