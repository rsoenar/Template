<style>
    .loader {
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 195%;
        z-index: 9999;
        background: url('/assets/images/plane.gif') 50% 50% no-repeat rgb(249, 249, 249);
        opacity: .8;
    }
</style>
<script src="/assets/js/jquery.min.js"></script>

<div class="loader"> </div>
<script type="text/javascript">
    $(window).load(function() {
        $(".loader").fadeOut("slow");
    });
</script>