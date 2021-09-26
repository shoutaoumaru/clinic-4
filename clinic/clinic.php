<?php
 /* Template Name: clinic
 */
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>医院紹介 | 医院テンプレート4</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendors/bootstrap-reboot.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendors/animsition.min.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/vendors/swiper.min.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/style.css" />
</head>

<body>
  <div id="main-wrapper" class="clinic-wrapper animsition">
    <header id="header" class="p-header">
      <div class="mobile-container">
        <div class=" logo__img">
          <a class="animsition-link" href=" <?php echo esc_url( home_url('/')); ?>">
            <div class="logo"></div>
          </a>
        </div>
        <div class="mobile-button">
          <button class="mobile-menu__btn">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>
      </div>
      <!-- /.mobile-container -->
      <div class="pc-container">
        <div class=" logo__img">
          <a class="animsition-link" href=" <?php echo esc_url( home_url('/')); ?>">
            <div class="logo-pc logo"></div>
          </a>
        </div>
        <nav class="pc-nav">
          <ul class="pc-nav-list">
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href=" <?php echo esc_url( home_url('/')); ?>"><span>ホーム</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('/about')); ?>"><span>わたしたちについて</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href=" <?php echo esc_url( home_url('/menu')); ?>"><span>診療案内</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('/faq')); ?>"><span>よくあるご質問</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('/news')); ?>"><span>お知らせ</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link " href=" <?php echo esc_url( home_url('/ricruit')); ?>"><span>採用情報</span></a>
            </li>
          </ul>
        </nav>
      </div>
      <!-- /.pc-container -->
      <nav class="sp-navbtn">
        <ul class="sp-navbtn__container">
          <li><a class="tel" href="tel:092-686-7954">電話予約<i class="icon-tel"></i></a></li>
          <li><a class="net" target="_blank" href="https://haisha-yoyaku.jp/">オンライン予約<i class="icon-net"></i></a>
          </li>
        </ul>
      </nav>
      <!-- /.nav-btn -->
    </header>
    <!-- /.p-header -->
    <div class="clinic-content">
      <section id="director" class="clinic-director">
        <h1 class="contents-title clip-js1 left">
          <p class="contents-title">医院紹介</p>
          <p class="contents-subtitle">Clinic</p>
        </h1>
        <h2 class="c-head04">院長紹介</h2>
        <div class="clinic-director__wrap">
          <div class="clinic-director__img appear up">
            <div class="clinic-director__career item">
              <p class="clinic-director__career-name  c-txt-brown01">
                利部 翔太
                <span class="clinic-director__career-sub">院長</span>
              </p>
              <dl class="clinic-director__career-year">
                <dt>2016年</dt>
                <dd>福岡大学医学部卒業<br>福岡大学病院耳鼻咽喉科および福岡市開業医にて研修</dd>
              </dl>
              <dl class="clinic-director__career-year">
                <dt>2017年</dt>
                <dd>福岡市Roundクリニックにて研鑽を積む</dd>
              </dl>
              <dl class="clinic-director__career-year">
                <dt>2020年</dt>
                <dd>RivRound医院開業</dd>
              </dl>
            </div>
          </div>
          <section class="clinic-director-sec c-bg-grey02 is-left appear up">
            <div class="c-container item">
              <p class="c-txt-sm">
                この度、福岡市博多で医院を開業させていただくことになりました利部翔太と申します。生まれ育ったこの街で開業できましたことを心から嬉しく思います。<br>当院は“患者様の満足のために”を医院理念として掲げています。<br>"はな"、"みみ"、"のど"のお悩み少しでもある方はぜひ一度ご相談にお越しください。
              </p>
            </div>
          </section>
        </div>
        <div class="c-container appear up">
          <div class="clinic-director-performance item">
            <div class="clinic-director-performance__item">
              <p class="clinic-director-performance__head">所属団体・ライセンス</p>
              <ul class="c-list01">
                <li class="c-list01__item">日本耳鼻咽喉科医学会</li>
                <li class="c-list01__item">日本耳鼻咽喉科学会補聴器相談医</li>
                <li class="c-list01__item">厚生労働省認定補聴器適合判定医</li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- /director -->
      <section id="facility" class="clinic-facility">
        <div class="c-container appear up">
          <h2 class="c-head04 item">施設紹介</h2>
          <ul class="clinic-facility-list item">
            <li class="clinic-facility-list__item">
              <div class="clinic-facility-list__img"><img src="<?php echo get_template_directory_uri(); ?>/images/home/reception@pc.jpg" alt=""></div>
              <div class="clinic-facility-list__txtarea">
                <div class="clinic-facility-list__wrap">
                  <p class="clinic-facility-list__head ">受付</p>
                  <p class="c-txt-sm">本来ならば医院は通いたくないところ。<br>患者様の不安を少しでも拭えるよう受付が笑顔でお迎えいたします。</p>
                </div>
              </div>
            </li>
            <li class="clinic-facility-list__item">
              <div class="clinic-facility-list__img"><img src="<?php echo get_template_directory_uri(); ?>/images/home/clinic__1@pc.jpg" alt=""></div>
              <div class="clinic-facility-list__txtarea">
                <div class="clinic-facility-list__wrap">
                  <p class="clinic-facility-list__head ">待合室</p>
                  <p class="c-txt-sm">
                    広々と落着いた雰囲気の待合。明るい光と柔らかい雰囲気は、これまでの医院とは違うイメージになっています。緊張している患者様にリラックスして頂けるようになっています。初診の方は問診票をご記入下さい。おいしいお水もご用意しています。
                  </p>
                </div>
              </div>
            </li>
            <li class="clinic-facility-list__item">
              <div class="clinic-facility-list__img"><img src="<?php echo get_template_directory_uri(); ?>/images/home/room@pc.jpg" alt=""></div>
              <div class="clinic-facility-list__txtarea">
                <div class="clinic-facility-list__wrap">
                  <p class="clinic-facility-list__head ">診療室</p>
                  <p class="c-txt-sm">いつも清潔に保っています。少しでもリラックスしていただきたいので、全体にやわらかい雰囲気の色を使っています。</p>
                </div>
              </div>
            </li>
            <li class="clinic-facility-list__item">
              <div class="clinic-facility-list__img"><img src="<?php echo get_template_directory_uri(); ?>/images/home/counseling.jpg" alt=""></div>
              <div class="clinic-facility-list__txtarea">
                <div class="clinic-facility-list__wrap">
                  <p class="clinic-facility-list__head ">カウンセリングルーム</p>
                  <p class="c-txt-sm">
                    専任のカウンセラーが患者様の悩みをゆっくり時間をかけて丁寧にカウンセリング致します。そして、治療後には丁寧な説明を受けることが出来ます。</p>
                </div>
              </div>
            </li>
            <li class="clinic-facility-list__item">
              <div class="clinic-facility-list__img"><img src="<?php echo get_template_directory_uri(); ?>/images/home/kid-room.jpg" alt=""></div>
              <div class="clinic-facility-list__txtarea">
                <div class="clinic-facility-list__wrap">
                  <p class="clinic-facility-list__head ">キッズスペース</p>
                  <p class="c-txt-sm">
                    小さなお子様をお連れの患者様はお子様をキッズスペースで遊ばせておくことが出来ます。受付のスタッフの目の届く範囲でお子様が遊ぶことによって、安心して治療を受けて頂くことが可能になります。</p>
                </div>
              </div>
            </li>
            <li class="clinic-facility-list__item">
              <div class="clinic-facility-list__img"><img src="<?php echo get_template_directory_uri(); ?>/images/home/counseling-2.jpg" alt=""></div>
              <div class="clinic-facility-list__txtarea">
                <div class="clinic-facility-list__wrap">
                  <p class="clinic-facility-list__head ">専門医との連携</p>
                  <p class="c-txt-sm">当院は専門医と連携して治療しています。</p>
                </div>
              </div>
            </li>
            <li class="clinic-facility-list__item">
              <div class="clinic-facility-list__img"><img src="<?php echo get_template_directory_uri(); ?>/images/home/car-space.jpg" alt=""></div>
              <div class="clinic-facility-list__txtarea">
                <div class="clinic-facility-list__wrap">
                  <p class="clinic-facility-list__head ">駐車場</p>
                  <p class="c-txt-sm">
                    タイムズ駐車場と契約しております。事前にタイムズに止めた旨をおっしゃって頂ければ駐車券をお渡し致しますので遠慮せずお声がけ下さい。</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- /facility -->
      <section id="equipment" class="clinic-equipment c-bg-grey02">
        <div class="c-container appear up">
          <h2 class="c-head04 item">院内設備</h2>
          <ul class="clinic-equipment-list item">
            <li class="clinic-equipment-list__item">
              <div class="clinic-equipment-list__img"><img src="<?php echo get_template_directory_uri(); ?>/images/home/ct.jpg" alt=""></div>
              <p class="clinic-equipment-list__head c-txt-brown01">CTスキャン</p>
              <p class="c-txt-sm">
                レントゲンよりもより詳細な情報が得られる、みみ・はな用のCT検査を予約なしに10分程度の短時間で行うことができます。
              </p>
            </li>
            <li class="clinic-equipment-list__item">
              <div class="clinic-equipment-list__img"><img src="<?php echo get_template_directory_uri(); ?>/images/home/rentogen.jpg" alt=""></div>
              <p class="clinic-equipment-list__head is-line c-txt-brown01">デジタルレントゲン</p>
              <p class="c-txt-sm">当院ではデジタルX線撮影を導入しております。従来のレントゲン撮影から1/5〜1/10の線量にてレントゲン撮影が可能です。</p>
            </li>
            <li class="clinic-equipment-list__item">
              <div class="clinic-equipment-list__img"><img src="<?php echo get_template_directory_uri(); ?>/images/home/naisikyo.jpg" alt=""></div>
              <p class="clinic-equipment-list__head c-txt-brown01">内視鏡検査</p>
              <p class="c-txt-sm">
                刺激の少ない径3.3㎜の細いファイバースコープと異物摘出や 組織検査も可能な鉗子付きファイバースコープの両方を導入しています
              </p>
            </li>
            <li class="clinic-equipment-list__item">
              <div class="clinic-equipment-list__img"><img src="<?php echo get_template_directory_uri(); ?>/images/home/img-machine5@2x.jpg" alt=""></div>
              <p class="clinic-equipment-list__head is-line c-txt-brown01">滅菌器</p>
              <p class="c-txt-sm">
                患者さまの治療に使った道具は、終わり次第、こちらの機器で滅菌をします。RivRound医院では、滅菌器の中でも最上位機器にあたる「クラスB」を使用。一つひとつの道具にも最善の注意を払って、快適な治療環境を患者さまに提供しています。
              </p>
            </li>
            <li class="clinic-equipment-list__item">
              <div class="clinic-equipment-list__img"><img src="<?php echo get_template_directory_uri(); ?>/images/home/img-point4@2x.jpg" alt=""></div>
              <p class="clinic-equipment-list__head c-txt-brown01">赤外線CCDカメラ</p>
              <p class="c-txt-sm">
                めまいの際に出現する『眼振』という異常な眼球運動を画像で確認することができます。</p>
            </li>
            <li class="clinic-equipment-list__item">
              <div class="clinic-equipment-list__img"><img src="<?php echo get_template_directory_uri(); ?>/images/home/img-point3@2x.jpg" alt=""></div>
              <p class="clinic-equipment-list__head is-line c-txt-brown01">聴力検査室</p>
              <p class="c-txt-sm">防音構造の聴力検査室でより正確な聴力検査が可能です。
              </p>
            </li>
          </ul>
        </div>
      </section>
      <!-- /equipment -->
      <section id="outline" class="clinic-outline">
        <div class="c-container appear up">
          <h2 class="c-head04 item">医院概要</h2>
          <div class="c-table01 item">
            <table>
              <tbody>
                <tr>
                  <th>医院名</th>
                  <td>RivRound医院</td>
                </tr>
                <tr>
                  <th>院長</th>
                  <td>利部 翔太</td>
                </tr>
                <tr>
                  <th>電話番号</th>
                  <td><a href="tel:092-686-7954">092-686-7954</a></td>
                </tr>
                <tr>
                  <th>住所</th>
                  <td>〒812-0011 <br>福岡県福岡市博多区博多駅前3-27-25-9F</td>
                </tr>
                <tr>
                  <th>診察時間</th>
                  <td>9:00-13:00 / 14:30-18:30</td>
                </tr>
                <tr>
                  <th>休診日</th>
                  <td>木曜日・日曜日・祝日定休 / 土曜日は月に1日程度休みあり</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </section>
      <!-- /outline -->
      <footer class="p-footer">
        <div class="p-footer__wrap">
          <div class="p-footer__block">
            <ul class="p-footer__list">
              <li class="p-footer__item">
                <a class="p-footer__link animsition-link" href="/">ホーム</a>
              </li>
              <li class="p-footer__item">
                <a class="p-footer__link animsition-link" href="<?php echo esc_url( home_url('/about')); ?>">わたしたちについて</a>
              </li>
              <li class="p-footer__item">
                <a class="p-footer__link animsition-link" href=" <?php echo esc_url( home_url('/menu')); ?>">診療案内</a>
              </li>
              <li class="p-footer__item">
                <a class="p-footer__link animsition-link" href="<?php echo esc_url( home_url('/news')); ?>">お知らせ</a>
              </li>
              <li class="p-footer__item">
                <a class="p-footer__link animsition-link" href="<?php echo esc_url( home_url('/faq')); ?>">よくあるご質問</a>
              </li>
              <li class="p-footer__item">
                <a class="p-footer__link animsition-link" href=" <?php echo esc_url( home_url('/ricruit')); ?>">採用情報</a>
              </li>
            </ul>
          </div>
          <div class="ft-info">
            <div class="ft-info__wrap">
              <div class="ft-info__btns">
                <p class="ft-info__reservation c-btn03 ">
                  <a class="c-btn03__link"
                    href="https://apo-toolboxes.stransa.co.jp/user/web/32ae1acc808e7d396dd3c08eb96b4fa7/reservations"
                    target="_blank" rel="noopener noreferrer">
                    <span class="c-btn03__txt u-serif">WEB予約</span>
                  </a>
                </p>
              </div>
            </div>
            <div class="ft-info__logos">
              <div class="ft-info__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/common/riv_logo_official2.png" alt="rivround"></div>
              <p class="ft-cr"><small class="ft-cr__txt">© Riv Round</small></p>
            </div>
          </div>
        </div>
      </footer>
      <!-- /.footer -->
    </div>
    <!-- /#main-contents -->
    <div class="mobile-menu">
      <nav class="mobile-menu__nav">
        <ul class="mobile-menu__list">
          <li class="mobile-menu__item">
            <a class="animsition-link" href="/">ホーム</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/about')); ?>">わたしたちについて</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href=" <?php echo esc_url( home_url('/menu')); ?>">診療案内</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/news')); ?>">お知らせ</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href="<?php echo esc_url( home_url('/faq')); ?>">よくあるご質問</a>
          </li>
          <li class="mobile-menu__item">
            <a class="animsition-link" href=" <?php echo esc_url( home_url('/ricruit')); ?>">採用情報</a>
          </li>
        </ul>
        <div class="reserve-btn-wrap">
          <div class="reserve-btn-tel">
            <h4>電話予約はこちら</h4>
            <div class="reserve-btn">
              <a href="tel:092-686-7954"><span>092-686-7954</span></a>
            </div>
          </div>
          <div class="reserve-btn-net">
            <h4>ネット予約はこちら</h4>
            <div class="reserve-btn">
              <a href="https://beauty.hotpepper.jp/" target="_blank"><span>ONLINE RESERVE</span></a>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <!-- /.mobile-menu -->
  </div>
  <!-- /#main-wrapper -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendors/animsition.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/page.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/text-animation.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll-btn.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/mobile-menu.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/c-main.js"></script>
</body>

</html>