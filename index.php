<?
session_start();
if(!empty($_POST['name']) && !empty($_POST['id'])){
  $_SESSION['name'] = $_POST['name'];
  $_SESSION['id'] = $_POST['id'];
  $_SESSION['valid'] = 1;
}
if(isset($_POST['destroy'])){
  session_destroy();
  die("<script>location.replace('/');</script>");
}
/*date_default_timezone_set('KST');
if(isset($_GET['ymd']) && isset($_GET['hm']) && isset($_GET['n'])){
  if(strpos($_GET['n'], '/') !== false || strpos($_GET['n'], '\\') !== false || strpos($_GET['n'], '.') !== false || strpos($_GET['n'], '$') !== false || strpos($_GET['n'], '&') !== false || strpos($_GET['n'], '*') !== false || strpos($_GET['n'], '\/') !== false || strpos($_GET['n'], '<') !== false || strpos($_GET['n'], '>') !== false || strpos($_GET['n'], ':') !== false || strpos($_GET['n'], ';') !== false || strpos($_GET['n'], '(') !== false || strpos($_GET['n'], ')') !== false || strpos($_GET['n'], ' ') !== false){
    echo "<script>alert('[SUBMIT.HYUNWOO.ORG]\\n오류가 발생하였습니다.');location.replace('./')</script>";
    die;
  }
  $_SESSION['date1'] = $_GET['ymd'];
  $_SESSION['date2'] = $_GET['ymd']."_".$_GET['hm'];
  $_SESSION['submitter'] = $_GET['n'];
  echo "<script>location.replace('./')</script>";
  exit;
}
elseif(isset($_GET['r'])){
  session_destroy();
  echo "<script>location.replace('./')</script>";
  exit;
}
$ds = DIRECTORY_SEPARATOR;
$submitter = $_SESSION['submitter'];
$ip = $_SERVER['REMOTE_ADDR'];
$dir1 = ".".$ds."submit".$ds."SUBMIT.HYUNWOO.ORG".$ds.$_SESSION['date1'].$ds;
$dir2 = $submitter."_".$_SESSION['date2']."_[".$ip."]";
$dir3 = $dir1.$submitter."_".$_SESSION['date2']."_[".$ip."]";*/
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1">
  <title>S-Assistant | HYUNWOO.ORG</title>
  <noscript><meta http-equiv="refresh" content="0;url=./"><div style="display:-webkit-flex;display:flex;-webkit-align-items:center;align-items:center;-webkit-justify-content:center;justify-content:center;position:fixed;width:100%;height:100%;top:0;left:0;background:#E9779E;color:white;z-index:1000"><h1>SUBMIT.HYUNWOO.ORG 구동을 위해서는 JavaScript 가 필요합니다.</h1></div></noscript>
  <link rel="icon" href="data:image/png;base64,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">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/font-nanumsquare/1.0.0/nanumsquare.css?ver=4.9.8"/>
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="assets/style.css?v2">
  <script src="https://cdn.hyunwoo.org/js/jquery.min.js"></script>
  <script src="https://cdn.hyunwoo.org/js/jquery-ui.min.js"></script>
  <input id="fbId" type="hidden" value="<?echo $_SESSION['id']?>" />
  <script src="assets/javascript.js?v3"></script>
  <script src="https://cdn.hyunwoo.org/js/disable.js"></script>
  <div id="fb-root"></div>
</head>
<body>
  <div class="loader-wrap"><div class="loader"></div></div>
  <div class="site-name"><div></div>S-Assistant</div>
  <div class="btn-close">&times;</div>
  <div id="content" class="hidden">
    <header>
      <div class="pf-container">
        <?
          if($_SESSION['valid']){
            echo'<img src="https://graph.facebook.com/'.$_SESSION['id'].'/picture" alt width="32px" height="32px" class="pf-icon" /><span class="pf-name">'.$_SESSION['name'].'</span>';
            $api_size = 'small';
          }
          else{
            echo '<style>.pf-container{background:transparent;padding-right:0;border-radius:5px}.field{overflow-y:hidden}</style>';
            $api_size = 'medium';
          }
          echo'<div class="fb-login-button" scope="public_profile" data-max-rows="1" data-size="'.$api_size.'" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="true" data-use-continue-as="false" onlogin="checkLoginState()"></div></div>';
        if(!$_SESSION['valid'])
          echo '<button class="btn-restore" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 32 32"><path fill="#ffffff" d="M 16 4 L 16 6 C 21.535156 6 26 10.464844 26 16 C 26 21.535156 21.535156 26 16 26 C 10.464844 26 6 21.535156 6 16 C 6 12.734375 7.585938 9.851563 10 8.03125 L 10 13 L 12 13 L 12 5 L 4 5 L 4 7 L 8.09375 7 C 5.59375 9.199219 4 12.417969 4 16 C 4 22.617188 9.382813 28 16 28 C 22.617188 28 28 22.617188 28 16 C 28 9.382813 22.617188 4 16 4 Z "/></svg></button>';
      ?>
    </header>
    <!--<section>
    <header>
    <div class="btn-back"></div>
    <div class="username">
    <?//echo $submitter?>
    <div class="folder" onclick="window.open('?d=<?//echo $_SESSION['date1']?>&v=<?//echo $dir2?>')" style="display:none"></div>
  </div>
  <div class="dirname"><?//echo $dir2?></div>
</header>
<form class="dropzone" action="./" method="post" enctype="multipart/form-data"></form>
</section>-->
    <main>
      <div class="field">
        <?
        if(!$_SESSION['valid']){?>
          <div class="group">
            <div class="input-group">
              <input type="text" id="input-name" placeholder="성명" maxlength="10" autocomplete="off" required />
              <label for="input-name">성명</label>
              <div class="bar"></div>
            </div>
            <div class="input-group">
              <input type="text" id="input-code" placeholder="제출코드" maxlength="32" pattern="[a-zA-Z0-9]+" autocomplete="off" required />
              <label for="input-code">제출코드</label>
              <div class="bar"></div>
            </div>
          </div>
          <button class="btn-next" type="button">승인</button>
        <?}
        else{?>
          <div class="console-container">
            <div class="console-load">읽어들이는 중</div>
            <div class="console-title">관리 콘솔</div>
            <div class="create-container"><div class="desc-create">새로운 폼 생성</div><button class="btn-create" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="50px" height="50px" viewBox="0 0 50 50"><path fill="#000" d="M 25 2 C 12.309295 2 2 12.309295 2 25 C 2 37.690705 12.309295 48 25 48 C 37.690705 48 48 37.690705 48 25 C 48 12.309295 37.690705 2 25 2 z M 25 4 C 36.609824 4 46 13.390176 46 25 C 46 36.609824 36.609824 46 25 46 C 13.390176 46 4 36.609824 4 25 C 4 13.390176 13.390176 4 25 4 z M 24 13 L 24 24 L 13 24 L 13 26 L 24 26 L 24 37 L 26 37 L 26 26 L 37 26 L 37 24 L 26 24 L 26 13 L 24 13 z" /></svg></button></div>
            <div class="console-table"><div class="modal-loader-wrap"><div class="loader"></div></div>데이터를 읽어들이는 중</div>
            <p class="site-info">S-Assistant</p>
          </div>
        <?}?>
      </div>
      <section class="modal">
        <div class="modal-create">
          <div class="modal-content modal-create-content">
            <div class="modal-tab modal-tab-create"><button class="btn-modal-close btn-modal-create-close" type="button"></button><div class="modal-title">새로운 폼 생성</div><div class="modal-subtitle">S-Assistant</div><div class="btn-save btn-create-save">만들기</div></div>
            <form class="modal-form modal-form-create" method="post">
              <section><small>기본 설정</small>
                <div class="form-row-1st"></div>
                <div class="form-row">
                  <label class="create-label-label" for="create-label">레이블</label>
                  <input type="text" id="create-label" placeholder="레이블" maxlength="20" required />
                </div>
                <div class="form-row">
                  <label class="create-label-max" for="create-max">최대 제출 수</label>
                  <input type="tel" id="create-max" placeholder="최대 제출 수" maxlength="4" pattern="[0-9]+" required />
                </div>
                <div class="form-row form-row-switch">
                  <label for="create-checkbox-postNow">즉시 게시</label>
                  <div class="switch-container">
                    <label>
                      <input type="checkbox" id="create-checkbox-postNow" checked="checked" />
                      <span class="switch"></span>
                    </label>
                  </div>
                </div>
                <div class="form-row form-row-reserve form-row-create-post">
                  <label class="create-label-post" for="create-post-date">예약 게시</label>
                  <div class="datetime-container">
                    <input type="text" id="create-post-date" class="datepicker"value="0000-00-00"  readonly />
                    <input type="time" id="create-post-time" value="00:00" />
                  </div>
                </div>
                <div class="form-row">
                  <label for="create-checkbox-unlimited">무기한 공개</label>
                  <div class="switch-container">
                    <label>
                      <input type="checkbox" id="create-checkbox-unlimited" checked="checked" />
                      <span class="switch"></span>
                    </label>
                  </div>
                </div>
                <div class="form-row form-row-reserve form-row-create-deadline">
                  <label class="create-label-deadline" for="create-deadline-date">마감</label>
                  <div class="datetime-container">
                    <input type="text" id="create-deadline-date" class="datepicker"value="0000-00-00"  readonly />
                    <input type="time" id="create-deadline-time" value="00:00" />
                  </div>
                </div>
                <div class="form-row">
                  <label for="create-checkbox-afterDeadline">마감 후 제출 허용</label>
                  <div class="switch-container">
                    <label>
                      <input type="checkbox" id="create-checkbox-afterDeadline" />
                      <span class="switch"></span>
                    </label>
                  </div>
                </div>
                <div class="form-row">
                  <label for="create-checkbox-useFb">중복 제출 방지</label>
                  <div class="switch-container">
                    <label>
                      <input type="checkbox" id="create-checkbox-useFb" />
                      <span class="switch"></span>
                    </label>
                  </div>
                </div>
                <small>중복 제출 방지를 활성화하면 모든 사용자는 Facebook을 통한 로그인 후에 폼에 접근할 수 있게 됩니다.</small>
              </section>
              <section><small>코드 설정</small>
                <div class="form-row-1st"></div>
                <div class="form-row">
                  <label for="create-slider-codelvl">코드 레벨</label>
                  <input type="range" id="create-slider-codelvl" class="slider" value="6" min="6" max="30" step="4" />
                  <div class="preview-codelvl create-preview-codelvl"></div>
                </div>
                <div class="form-row">
                  <label>코드 미리보기</label>
                  <input class="preview-code create-preview-code" type="text" readonly />
                  <div class="load create-load-code"></div>
                  <input type="hidden" id="create-code" />
                </div>
                <small>코드 레벨을 높게 설정할수록 무차별 대입 공격 등으로 폼을 찾기가 더 어려워집니다.</small>
              </section>
              <div class="code-reissue create-code-reissue">코드 재설정</div>
            </form>
          </div>
        </div>
        <div class="modal-modify">
          <div class="modal-content modal-modify-content">
          <div class="modal-tab modal-tab-modify"><button class="btn-modal-close btn-modal-modify-close" type="button"></button><div class="modal-title">폼 관리</div><div class="modal-subtitle">S-Assistant</div><div class="btn-save btn-modify-save">저장</div></div>
            <form class="modal-form modal-form-modify" method="post">
              <section><small>기본 설정</small>
                <div class="form-row-1st"></div>
                <div class="form-row">
                  <label id="modify-label-label" for="modify-label">레이블</label>
                  <input type="text" id="modify-label" placeholder="레이블" maxlength="20" required />
                </div>
                <div class="form-row">
                  <label id="modify-label-max" for="modify-max">최대 제출 수</label>
                  <input type="tel" id="modify-max" placeholder="최대 제출 수" maxlength="4" pattern="[0-9]+" required />
                </div>
                <div class="form-row form-row-switch">
                  <label for="modify-checkbox-postNow">즉시 게시</label>
                  <div class="switch-container">
                    <label>
                      <input type="checkbox" id="modify-checkbox-postNow" />
                      <span class="switch"></span>
                    </label>
                  </div>
                </div>
                <div class="form-row form-row-reserve form-row-modify-post">
                  <label class="modify-label-post" for="modify-post-date">예약 게시</label>
                  <div class="datetime-container">
                    <input type="text" id="modify-post-date" class="datepicker" readonly />
                    <input type="time" id="modify-post-time" value="00:00" />
                  </div>
                </div>
                <div class="form-row">
                  <label for="modify-checkbox-unlimited">무기한 공개</label>
                  <div class="switch-container">
                    <label>
                      <input type="checkbox" id="modify-checkbox-unlimited" />
                      <span class="switch"></span>
                    </label>
                  </div>
                </div>
                <div class="form-row form-row-reserve form-row-modify-deadline">
                  <label class="modify-label-deadline" for="modify-deadline-date">마감</label>
                  <div class="datetime-container">
                    <input type="text" id="modify-deadline-date" class="datepicker" readonly />
                    <input type="time" id="modify-deadline-time" value="00:00" />
                  </div>
                </div>
                <div class="form-row">
                  <label for="modify-checkbox-afterDeadline">마감 후 제출 허용</label>
                  <div class="switch-container">
                    <label>
                      <input type="checkbox" id="modify-checkbox-afterDeadline" />
                      <span class="switch"></span>
                    </label>
                  </div>
                </div>
                <div class="form-row">
                  <label for="modify-checkbox-useFb">중복 제출 방지</label>
                  <div class="switch-container">
                    <label>
                      <input type="checkbox" id="modify-checkbox-useFb"/>
                      <span class="switch"></span>
                    </label>
                  </div>
                </div>
                <small>중복 제출 방지를 활성화하면 모든 사용자는 Facebook을 통한 로그인 후에 폼에 접근할 수 있게 됩니다.</small>
              </section>
              <section><small>코드 설정</small>
                <div class="form-row-1st"></div>
                <div class="form-row form-row-modify-codelvl form-row-modify-codelvl-disabled">
                  <label for="modify-slider-codelvl">코드 레벨</label>
                  <input type="range" id="modify-slider-codelvl" class="slider" value="6" min="6" max="30" step="4" />
                  <div class="preview-codelvl modify-preview-codelvl"></div>
                </div>
                <div class="form-row">
                  <label>코드 미리보기</label>
                  <input class="preview-code modify-preview-code" type="text" readonly />
                  <div class="load modify-load-code"></div>
                  <input type="hidden" id="modify-code" />
                </div>
                <small>코드 레벨을 높게 설정할수록 무차별 대입 공격 등으로 폼을 찾기가 더 어려워집니다.</small>
              </section>
              <div class="code-reissue modify-code-reissue">코드 재설정</div>
            </form>
          </div>
        </div>
        <div class="modal-copied">
          <div>
            클립보드에 복사되었습니다!
            <button class="btn-modal-copied-close" type="button">닫기</button>
          </div>
        </div>
      </section>
    </main>
  </div><!-- content -->
</body>
</html>
<?
/*if (!empty($_FILES) && isset($submitter)){
$allowed =  array('jpg', 'jpeg', 'png', 'gif');
$ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
if(!in_array($ext,$allowed)) die;
mkdir($dir1, 0700);
mkdir($dir3, 0700);
$tempFile = $_FILES['file']['tmp_name'];
$targetFile = dirname(__FILE__).$ds.$dir3.$ds.$_FILES['file']['name'];
move_uploaded_file($tempFile,$targetFile);
}
if(!(isset($submitter)))echo'<script>f(0)</script>';
elseif(isset($_GET['d']) || isset($_GET['v']))echo'<script>setTimeout(function(){ location.reload(); }, 5000);</script>';
else echo'<script>f(1)</script>';*/
?>