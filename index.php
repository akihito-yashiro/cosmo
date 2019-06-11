<?php ini_set( 'display_errors', 1 ); //エラー表示
$path = dirname( __FILE__);

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="noindex">
    <title>cosmo</title>
    <link rel="icon" href="/cosmo/common/img/favicon.ico">
    <link rel="stylesheet" href="/cosmo/common/bscstm/css/reset_bscstm.css">
    <link rel="stylesheet" href="/cosmo/common/bscstm/css/bscstm.min.css">
    <script src="./common/js/echo.min.js"></script>
    <script>echo.init();</script>
    <style media="screen">
    ::-webkit-scrollbar{
        width: 10px;
    }
    ::-webkit-scrollbar-track{
        background: rgba(#ccc,1);
    }
    ::-webkit-scrollbar-thumb{
        background: #ccc;
        border-radius: 10px;
        box-shadow: inset 0 0 0 2px #fff;
    }
    .left_pjt_nav{
        overflow-x: auto;
        height:calc(100vh - 46px);
    }
    .dir_ul{
        display: none;
    }

    </style>
</head>

<body class="bg-eee bscstm m-0 w-100p " >
    <div class="w-100p">

        <!-- left navi -->
        <section class="sidebar_left w-10p bg-light position-fixed" style="top:0;">
            <p class="p-15px m-0p bg-info text-white">cosmo</p>
            <div class="left_pjt_nav ">
                <div class="">
                    <p class="p-15px left_dir_open">basic</p>
                    <ul class="px-30px dir_ul" style="">
                        <?php
                        foreach(glob('../cosmo_lib/basic/*') as $folder){
                            $folder_basename =  basename($folder);
                            ?>
                            <li class="pb-10px">
                                <a class="fz-12px text-black-50" href="#<?php echo $folder_basename; ?>"><?php echo $folder_basename; ?></a>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
                <div class="">
                    <p class="p-15px left_dir_open">kinari</p>
                    <ul class="px-30px dir_ul" style="">
                        <?php
                        foreach(glob('../cosmo_lib/kinari/*') as $folder){
                            $folder_basename =  basename($folder);
                            ?>
                            <li class="pb-10px">
                                <a class="fz-12px text-black-50" href="#<?php echo $folder_basename; ?>"><?php echo $folder_basename; ?></a>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
                <div class="">
                    <p class="p-15px left_dir_open">sen</p>
                    <ul class="px-30px dir_ul" style="">
                        <?php
                        foreach(glob('../cosmo_lib/sen/*') as $folder){
                            $folder_basename =  basename($folder);
                            ?>
                            <li class="pb-10px">
                                <a class="fz-12px text-black-50" href="#<?php echo $folder_basename; ?>"><?php echo $folder_basename; ?></a>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </section>

        <main class="mx-md-10p w-md-80p bg-white p-0" >
            <!-- header -->
            <p class="p-15px w-md-90p m-0p bg-secondary text-white position-fixed" style="z-index:1000;">キノスラ　-テンプレートライブラリ-　α版（開発中）</p>

            <!-- contents template -->
            <div class="">
                <?php
                foreach(glob('../cosmo_lib/basic/*') as $folder){
                    $folder_basename =  basename($folder);
                ?>
                    <div id="<?php echo $folder_basename; ?>" class="row no-gutters pt-46px mt-n46px">
                        <div class="col-24 bg-secondary-50 text-white p-15px mb-46px cp_pr" style="z-index:100;" >
                            <?php echo $folder_basename; ?>
                            <a class="link_dir text-white border fz-10px py-3px px-6px rounded float-right ml-10px text-decoration-none" href="<?php echo $folder; ?>" target="_blank">ディレクトリ-リンク</a>
                            <a class="src_copy text-white border fz-10px py-3px px-6px rounded float-right ml-10px text-decoration-none" href="<?php echo $folder; ?>">htmlコピー</a>
                            <span class="copy_result float-right text-white fz-10px py-3px"></span>
                        </div>
                        <div class="col border-right" style="min-height:50vh;" style="z-index:100;">
                            <iframe data-echo="https://v133-130-111-84.a03a.g.tyo1.static.cnode.io/cosmo_lib/common/basic/pc.php?template_name=<?php echo $folder_basename; ?>" width="125%" height="125%" style="transform:scale(0.8);-moz-transform:scale(0.8);-webkit-transform:scale(0.8);-o-transform:scale(0.8);-ms-transform:scale(0.8);transform-origin:0 0;-moz-transform-origin:0 0;-webkit-transform-origin:0 0;-o-transform-origin:0 0;-ms-transform-origin:0 0;"></iframe>
                        </div>
                        <div class="w-280px" style="z-index:100;">
                            <iframe data-echo="https://v133-130-111-84.a03a.g.tyo1.static.cnode.io/cosmo_lib/common/basic/sp.php?template_name=<?php echo $folder_basename; ?>" width="125%" height="125%" style="transform:scale(0.8);-moz-transform:scale(0.8);-webkit-transform:scale(0.8);-o-transform:scale(0.8);-ms-transform:scale(0.8);transform-origin:0 0;-moz-transform-origin:0 0;-webkit-transform-origin:0 0;-o-transform-origin:0 0;-ms-transform-origin:0 0;"></iframe>
                        </div>
                    </div>
                <?php
                }
                ?>
                <?php
                foreach(glob('../cosmo_lib/kinari/*') as $folder){
                    $folder_basename =  basename($folder);
                ?>
                    <div id="<?php echo $folder_basename; ?>" class="row no-gutters pt-46px mt-n46px">
                        <div class="col-24 bg-secondary-50 text-white p-15px mb-46px cp_pr" style="z-index:100;" >
                            <?php echo $folder_basename; ?>
                            <a class="link_dir text-white border fz-10px py-3px px-6px rounded float-right ml-10px text-decoration-none" href="<?php echo $folder; ?>" target="_blank">ディレクトリ-リンク</a>
                            <a class="src_copy text-white border fz-10px py-3px px-6px rounded float-right ml-10px text-decoration-none" href="<?php echo $folder; ?>">htmlコピー</a>
                            <span class="copy_result float-right text-white fz-10px py-3px"></span>
                        </div>
                        <div class="col border-right" style="min-height:50vh;" style="z-index:100;">
                            <iframe data-echo="https://v133-130-111-84.a03a.g.tyo1.static.cnode.io/cosmo_lib/kinari/<?php echo $folder_basename; ?>/system/pc.php" width="125%" height="125%" style="transform:scale(0.8);-moz-transform:scale(0.8);-webkit-transform:scale(0.8);-o-transform:scale(0.8);-ms-transform:scale(0.8);transform-origin:0 0;-moz-transform-origin:0 0;-webkit-transform-origin:0 0;-o-transform-origin:0 0;-ms-transform-origin:0 0;"></iframe>
                        </div>
                        <div class="w-280px" style="z-index:100;">
                            <iframe data-echo="https://v133-130-111-84.a03a.g.tyo1.static.cnode.io/cosmo_lib/kinari/<?php echo $folder_basename; ?>/system/sp.php" width="125%" height="125%" style="transform:scale(0.8);-moz-transform:scale(0.8);-webkit-transform:scale(0.8);-o-transform:scale(0.8);-ms-transform:scale(0.8);transform-origin:0 0;-moz-transform-origin:0 0;-webkit-transform-origin:0 0;-o-transform-origin:0 0;-ms-transform-origin:0 0;"></iframe>
                        </div>
                    </div>
                <?php
                }
                ?>
                <?php
                foreach(glob('../cosmo_lib/sen/*') as $folder){
                    $folder_basename =  basename($folder);
                ?>
                    <div id="<?php echo $folder_basename; ?>" class="row no-gutters pt-46px mt-n46px">
                        <div class="col-24 bg-secondary-50 text-white p-15px mb-46px cp_pr" style="z-index:100;" >
                            <?php echo $folder_basename; ?>
                            <a class="link_dir text-white border fz-10px py-3px px-6px rounded float-right ml-10px text-decoration-none" href="<?php echo $folder; ?>" target="_blank">ディレクトリ-リンク</a>
                            <a class="src_copy text-white border fz-10px py-3px px-6px rounded float-right ml-10px text-decoration-none" href="<?php echo $folder; ?>">htmlコピー</a>
                            <span class="copy_result float-right text-white fz-10px py-3px"></span>
                        </div>
                        <div class="col border-right" style="min-height:50vh;" style="z-index:100;">
                            <iframe data-echo="https://v133-130-111-84.a03a.g.tyo1.static.cnode.io/cosmo_lib/sen/<?php echo $folder_basename; ?>/system/pc.php" width="125%" height="125%" style="transform:scale(0.8);-moz-transform:scale(0.8);-webkit-transform:scale(0.8);-o-transform:scale(0.8);-ms-transform:scale(0.8);transform-origin:0 0;-moz-transform-origin:0 0;-webkit-transform-origin:0 0;-o-transform-origin:0 0;-ms-transform-origin:0 0;"></iframe>
                        </div>
                        <div class="w-280px" style="z-index:100;">
                            <iframe data-echo="https://v133-130-111-84.a03a.g.tyo1.static.cnode.io/cosmo_lib/sen/<?php echo $folder_basename; ?>/system/sp.php" width="125%" height="125%" style="transform:scale(0.8);-moz-transform:scale(0.8);-webkit-transform:scale(0.8);-o-transform:scale(0.8);-ms-transform:scale(0.8);transform-origin:0 0;-moz-transform-origin:0 0;-webkit-transform-origin:0 0;-o-transform-origin:0 0;-ms-transform-origin:0 0;"></iframe>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>

        </main>

        <!-- right navi -->
        <section class="sidebar_right pt-46px h-100p w-10p bg-light position-fixed" style="top:0;right:0;z-index:200;">
            <div class="">
            </div>
        </section>

    </div>
    <script src="./common/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript">
        // コピーボタンでhtmlをクリップボードコピー
        $('.src_copy').click(function(){
            var url = $(this).attr('href');
            $('.copy_result').text('');

            $.ajax({
                /* 取得するファイルを指定 */
                url: url + '/index.php',

                /* データの取得に成功した場合以下の処理 */
                success: function(data){

                    var ta = document.createElement("textarea");
                    ta.value = data;
                     document.body.appendChild(ta);
                    ta.select();
                    document.execCommand("copy");
                    ta.parentElement.removeChild(ta)
                }
            });
            $(this).parents('.cp_pr').find('.copy_result').text('クリップボードにコピーしました。');
            return false;
        });

        //左サイドバーのディレクトリー開閉
        // $('.left_dir_open').click(function() {
        //     $(this).find('.dir_ul').toggle(500);
        // })

        // $(".left_dir_open").on("click", function() {
        //   $("#tabBoxes div").hide();
        //   $($(this).attr("href")).fadeToggle();
        //   return false;
        // });
        $(".left_dir_open").on("click", function() {
          $(this).next().slideToggle();
        });

    </script>

</body>

</html>
