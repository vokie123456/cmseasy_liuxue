<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<script defer>
var obj = document.getElementById("content_text").getElementsByTagName("img");
for(i=0;i<obj.length;i++){
if(obj[i].width>1000){
obj[i].width = 1000;
}
}
</script>