<html>
    <script
        type="text/javascript"
        src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
    <script
        type="text/javascript"
        src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
    <style type="text/css">
        .tg {
            border-collapse: collapse;
            border-spacing: 0;
        }
        .tg td {
            border-style: solid;
            border-color: black;
            border-width: 1px;
            font-family: Arial, sans-serif;
            font-size: 14px;
            overflow: hidden;
            padding: 12px 20px;
            word-break: normal;
        }
        .tg th {
            border-style: solid;
            border-color: black;
            border-width: 1px;
            font-family: Arial, sans-serif;
            font-size: 14px;
            font-weight: normal;
            overflow: hidden;
            padding: 12px 20px;
            word-break: normal;
        }
        .tg .tg-lboi {
            border-color: inherit;
            text-align: left;
            vertical-align: middle;
        }
        .tg .tg-9wq8 {
            border-color: inherit;
            text-align: center;
            vertical-align: middle;
            
        }
        .tg .tg-c3ow {
            border-color: inherit;
            text-align: center;
            vertical-align: top;
        }
        .tg .tg-jfoo {
            border-color: inherit;
            font-size: 20px;
            font-weight: bold;
            text-align: center;
            vertical-align: top;
            background-color: lightgrey;

        }
        .tg .tg-d1le {
            border-color: inherit;
            font-size: 26px;
            font-weight: bold;
            text-align: center;
            vertical-align: top;
        }
        .tg .tg-0pky {
            border-color: inherit;
            text-align: left;
            vertical-align: top;
            background-color: transparent;
        }
        .tg .tg-7btt {
            border-color: inherit;
            font-weight: bold;
            text-align: center;
            vertical-align: top;
        }
        .tg .tg-fymr {
            border-color: inherit;
            font-weight: bold;
            text-align: left;
            vertical-align: top;
        }

        .tg .tg-afsw {
          border-color: inherit;
          vertical-align: top;
          text-align: center;
        }
        .tg .tg-afsa {
          border-color: inherit;
          vertical-align: top;
          text-align: center;
          vertical-align: middle;

        }
        .ta-ssaw{
            position:absolute;
            align: right;
        }
        /* .img{
            background-color: transparent;

        } */
    </style>
    <body>

        <div >
            <head>
                <meta charset="EUC-KR">
                <title>위험성 Check List</title>
            </head>
            <body>
                <table
                    class="tg"
                    border="1"
                    ;=";"
                    style="undefined;table-layout: fixed; width: 1019px" id="printArea">
                    <colgroup>
                        <col style="width: 250px">
                        <col style="width: 132px">
                        <col style="width: 108px">
                        <col style="width: 231px">
                        <col style="width: 145px">
                        <col style="width: 76px">
                        <col style="width: 77px">
                    </colgroup>
                    <thead>
                        <tr>
                            <th class="tg-d1le" colspan="7">위험성 Check List</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="tg-jfoo">작업공종[Code]</td>
                            <!-- 작업 코드 입력 예정 -->
                            <td class="tg-afsa" colspan="2"><input type="text" style="width: 100%; border: 0"></td>
                            <!-- 작업명 입력 예정 -->
                            <td class="tg-afsa" colspan="4"><input type="text" style="width: 100%; border: 0"></td>
                        </tr>
                        <tr>
                            <td class="tg-jfoo">시공사</td>
                            <td class="tg-afsa" colspan="2"><input type="text" style="width: 100%; border: 0"></td>
                            <td class="tg-jfoo">공사명</td>
                            <td class="tg-afsa" colspan="3"><input type="text" style="width: 100%; border: 0"></td>
                        </tr>
                        <tr>
                            <td class="tg-7btt" colspan="7">※ 사진 전송방법 : 원격 모니터링 대상을 휴대폰으로 사진 촬영하여 공사번호+Code번호 입력 후
                                <br>
                                #1230으로 전송[한글 및 특수기호 입력 시 미연계 될 수 있으니 숫자와 영문자만 입력]</td>
                        </tr>
                        <tr>
                            <td class="tg-jfoo" colspan="3">[ 작업절차도 ]</td>
                            <td class="tg-jfoo" colspan="4">[ 위험 요인 ]</td>
                        </tr>
                        <tr>
                            <td class="tg-0pky" colspan="3" rowspan="5">
                              <!-- 이미지 작업 예정 -->
                              <img src="../img/ZB4BLK2fC5xV87g9nhxweSfoWrBDXU1Q6bm8UdzR.jpg" width=100%; hight=100%;>
                            </td>
                            <td class="tg-0pky" colspan="4">Ο 감전 → 관련 개폐장치 미개방, 검전•접지 미시행, 전기기계•<br>
                                기구 및 작업용 케이블 절연불량, 휴전구간 이외의 활선<br>
                                부위에 접근, 주회로 저항 측정시 작업자 접촉<br>Ο 추락 → 차단기 상부<br>Ο 낙하 → 차단기 상부 작업시 공기구•자재 낙하<br>Ο 협착 → 조작기구부 점검중 차단기•단로기 조작시험</td>
                        </tr>
                        <tr>
                            <td class="tg-jfoo" colspan="2">[ 핵심 Check Point ]</td>
                            <td class="tg-9wq8">확인</td>
                            <td class="tg-c3ow">해당<br>없음</td>
                        </tr>
                        <tr>
                            <td class="tg-fymr" colspan="2">4. 검전 및 접지 5. 작업전 안전회의<br>6. 구획로프(망) 및 사활 표시찰 부착<br>Ο 작업자 전원 참석 안전교육 및 작업내용 숙지<br>
                                <span style="color:#FE0000">※ 작업인원 확인 및 안전장구 착용</span>
                                <br>
                                &nbsp;&nbsp;- 안전모, 안전화<br>
                                <span style="color:#FE0000">※ 작업전 안전회의 개최, 작업내용 교육</span>
                                <br>
                                &nbsp;&nbsp;- 작업자 전원 참석 안전교육 및 작업내용 숙지<br>
                                <span style="color:#FE0000">※ 위험성 체크리스트 점검</span>
                                <br>※ 안전작업 구획표시<br>
                                &nbsp;&nbsp;- 구획로프(망, 체인), 활선 설비 접근금지,<br>
                                주의표시, 사활표시 등<br>
                                <span style="color:#FE0000">※ 휴전설비 접지시행</span>
                                <br>
                                &nbsp;&nbsp;- 접지 시행 전 대상기기 확인
                                <br>
                                &nbsp;&nbsp;- 접지 시행 후 접지개폐기 투입 상태
                              </td>
                              <!-- 핵심 Check Point Check box -->
                            <td class="tg-afsw" style="padding-top: 15px;"> 
                              <br><br><input type="checkbox"><br><input type="checkbox"><br><br><input type="checkbox"><br><br>
                              <input type="checkbox"><br><input type="checkbox"><br><br><br><br><input type="checkbox">
                            </td>
                            <td class="tg-afsw" style="padding-top: 15px;">
                              <br><br><input type="checkbox"><br><input type="checkbox"><br><br><input type="checkbox"><br><br>
                              <input type="checkbox"><br><input type="checkbox"><br><br><br><br><input type="checkbox">
                            </td>
                        </tr>

                        <tr>
                            <td class="tg-0pky" colspan="2">8. 본 작업시행<br>Ο 관련 개폐장치 개방•시건•접지, 조작함내 조작전원 OFF<br>Ο 작업구간 가스구획 교육 및 가스밸브 시건여부<br>Ο 지상감시자 배치 및 상•하부 동시작업 금지<br>Ο 사활구분표시기 설치 또는 사용여부<br>Ο CB 및 DS 조작, 주회로 저항측정시 작업자 접근 방지 조치<br>Ο CT 및 PT 결선 전후 확인<br>Ο 조작기구부 점검시 점검자 이외 조작금지 여부<br>Ο 조작시험시 접지철거 및 현장인원 철수 확인<br>
                                <span style="color:#FE0000">※ 작업중 안전장구 착용 확인</span>
                            </td>
                            <!-- 핵심 Check Point Check box -->
                            <td class="tg-afsw" style="padding-top: 15px;">
                              <br><input type="checkbox"><br><br><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><br><br>
                              <input type="checkbox"><input type="checkbox"><input type="checkbox"><br><input type="checkbox">
                            </td>
                            <td class="tg-afsw" style="padding-top: 15px;">
                              <br><input type="checkbox"><br><br><input type="checkbox"><input type="checkbox"><input type="checkbox"><input type="checkbox"><br><br>
                              <input type="checkbox"><input type="checkbox"><input type="checkbox"><br><input type="checkbox">
                            </td>
                        </tr>
                        <tr>
                            <td class="tg-0pky" colspan="2">9. 작업종료<br>Ο 미복귀 경보 및 접지철거 확인</td>
                            <!-- 핵심 Check Point Check box -->
                            <td class="tg-afsw" style="padding-top: 15px;"><br><input type="checkbox"></td>
                            <td class="tg-afsw" style="padding-top: 15px;"><br><input type="checkbox"></td>
                        </tr>
                        <tr>
                            <td class="tg-jfoo" colspan="7">핵심 Check Point 원격 모니터링</td>
                        </tr>
                        <tr>
                            <td class="tg-lboi" colspan="5">Ο 핵심 모니터링 공정 : 4 검전 및 접지 5 작업전 안전회의 6 구획로프(망) 및 사활 표시찰 부착</td>
                            <td class="tg-9wq8">확인</td>
                            <td class="tg-9wq8">해당<br>없음</td>
                        </tr>
                        <tr>
                            <td class="tg-0pky" colspan="5">Ο 사진 촬영 대상 공정<br>
                                <span style="color:#FE0000">※ 작업인원 확인(안전장구 착용상태 포함) ※ 작업 전 안전회의록 ※ 위험성 체크리스트</span>
                                <br>
                                <span style="color:#FE0000">※ 휴전설비 현장접지 시행 ※ 안전작업 구획표시</span>
                                <br>
                                <span style="color:#FE0000">※ 작업중 안전장구 착용 확인</span>
                            </td>
                            <!-- 핵심 Check Point 원격 모니터링 Check box -->
                            <td class="tg-afsw"><br><input type="checkbox"><br><input type="checkbox"><br><input type="checkbox"></td>
                            <td class="tg-afsw"><br><input type="checkbox"><br><input type="checkbox"><br><input type="checkbox"></td>
                        </tr>
                        <tr>
                            <td class="tg-0pky" colspan="3">Ο 일시 : 
                              <!--추후 td로 변경 후 결과값만 가져오기-->
                              <input type="datetime-local" >                    
                            </td>
                            <!-- 서명 이미지 입력 -->
                            <td class="tg-0pky" colspan="4">Ο 확 인 자 :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <img src="../img/KakaoTalk_20220714_155837676-removebg-preview.png" width=50; hight=100; class="ta-ssaw" style="left: 770px;"><span class="ta-ssaw" >(인)</span></td>
                        </tr>
                    </tbody>
                </table>
                </body>
    </div>
    </body>
    <button type="button" class="btn btn-m btn-outline-black" onclick="savePDF()">PDF 저장</button>

</html>

<script>
    function savePDF() {
    document.getElementById("printArea").style.borderColor = "black";

    //저장 영역 div id
    html2canvas($('#printArea')[0], {
        //logging : true,	  디버그 목적 로그 proxy: "html2canvasproxy.php",
        allowTaint: true, // cross-origin allow
        useCORS: true, // CORS 사용한 서버로부터 이미지 로드할 것인지 여부
        scale: 2 // 기본 96dpi에서 해상도를 두 배로 증가

    }).then(function (canvas) {
// 캔버스를 이미지로 변환
var imgData = canvas.toDataURL('image/png');

var imgWidth = 190; // 이미지 가로 길이(mm) / A4 기준 210mm
var pageHeight = imgWidth * 1.414; // 출력 페이지 세로 길이 계산 A4 기준
var imgHeight = canvas.height * imgWidth / canvas.width;
var heightLeft = imgHeight;
var margin = 10; // 출력 페이지 여백설정
var doc = new jsPDF('p', 'mm');
var position = 10;

// 첫 페이지 출력
doc.addImage(imgData, 'PNG', margin, position, imgWidth, imgHeight);
heightLeft -= pageHeight;

// 한 페이지 이상일 경우 루프 돌면서 출력
while (heightLeft >= 20) { // 35
position = heightLeft - imgHeight;
position = position - 20; // -25

doc.addPage();
doc.addImage(imgData, 'PNG', margin, position, imgWidth, imgHeight);
heightLeft -= pageHeight;
}

// 파일 저장
doc.save('filename.pdf');
});
document
.getElementById("printArea")
.style
.borderColor = "red";
}
</script>