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
        <html lang="ko">
    <head>
        <title>위험성평가 교육일지</title>
        <meta charset="utf-8">

        <style type="text/css">
            .tg {
                border-collapse: collapse;
                border-spacing: 0;
            }
            .tg td {
                border-color: black;
                border-style: solid;
                border-width: 1px;
                font-family: Arial, sans-serif;
                font-size: 12px;
                overflow: hidden;
                word-break: normal;
            }
            .tg th {
                border-color: black;
                border-style: solid;
                border-width: 1px;
                font-family: Arial, sans-serif;
                font-size: 12px;
                font-weight: normal;
                overflow: hidden;
                word-break: normal;
            }
            .tg .tb-title {
                border-color: inherit;
                text-align: center;
                vertical-align: top;
                font-size: larger;
                font-weight: bold;
                background-color: lightgrey;
            }
            .tg .tg-lboi {
                border-color: inherit;
                text-align: center;
                vertical-align: middle;
                background-color: lightgrey;
            }
            .tg .tg-c3ow {
                border-color: inherit;
                text-align: center;
                vertical-align: middle;
                background-color: lightgrey;
            }
            .tg .tg-0pky {
                border-color: inherit;
                text-align: center;
                vertical-align: middle;
            }
            .tg .tg-a123 {
                border-color: inherit;
                text-align: center;
                vertical-align: middle;
                background-color: lightgrey;
            }
            .tg .tg-dvpl {
                border-color: inherit;
                text-align: left;
                vertical-align: top;
            }
            .tg .tg-0lax {
                text-align: center;
                vertical-align: middle;
            }
        </style>

    </head>

    <body>
        <table class="tg" id="printArea">
            <thead>
                <tr>
                    <th class="tb-title" colspan="7">작업전[<span style="color:blue">후</span>] 안전회의 및 근로자 참여 위험성평가 후 교육일지</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="tg-c3ow" bgcolor="lightgrey">공사명</td>
                    <td class="tg-0pky" colspan="3">
                        <input type="text" style="width: 100%; border: 0">
                    </td>
                    <td class="tg-c3ow" bgcolor="lightgrey">시공회사명</td>
                    <td class="tg-c3ow" colspan="2">
                        <input type="text" style="width: 100%; border: 0">
                    </td>
                </tr>
                <tr>
                    <td class="tg-c3ow" bgcolor="lightgrey">일시</td>
                        @foreach($tests as $test)
                            <td colspan="3">{{$test->workday}}</td>
                        @endforeach
                    <td class="tg-c3ow" bgcolor="lightgrey">작업책임자</td>
                    <td class="tg-dvpl" colspan="2">
                        <input type="text" style="width: 100%; border: 0">
                    </td>
                </tr>
                <tr>
                    <td class="tg-c3ow">작업인원</td>
                    <td class="tg-0pky" colspan="3">
                        <input type="text" style="width: 100%; border: 0">
                    </td>
                    <td class="tg-c3ow">작업장소</td>
                    <td class="tg-0pky" colspan="2">
                        <input type="text" style="width: 100%; border: 0">
                    </td>
                </tr>
                <tr>
                    <td class="tg-lboi" rowspan="11">업무분담</td>
                    <td class="tg-lboi" rowspan="2">작업자</td>
                    <td class="tg-lboi" rowspan="2">작업내용</td>
                    <td class="tg-a123" colspan="4">작업 후 신체 이상여부 확인</td>
                </tr>
                <tr>
                    <td class="tg-a123" colspan="2">이상유무</td>
                    <td class="tg-a123">내용</td>
                    <td class="tg-a123">서명</td>
                </tr>
                <tr>
                    <td class="tg-0pky">
                        <input type="text" style="width: 100%; border: 0">
                    </td>
                    <td class="tg-0pky">
                        <input type="text" style="width: 100%; border: 0">
                    </td>
                    <td class="tg-0pky" colspan="2">
                        <input type="radio" name="abnormal1_yn" checked="checked">
                        <span class="up">무</span>
                        <input type="radio" name="abnormal1_yn">
                        <span class="up">유</span>
                    </td>
                    <td class="tg-0pky">
                        <input type="text" style="width: 100%; border: 0">
                    </td>
                    <td class="tg-0pky"></td>
                </tr>
                <tr>
                    <td class="tg-0pky">
                        <input type="text" style="width: 100%; border: 0">
                    </td>
                    <td class="tg-0pky">
                        <input type="text" style="width: 100%; border: 0">
                    </td>
                    <td class="tg-0pky" colspan="2">
                        <input type="radio" name="abnormal2_yn" checked="checked">
                        <span class="up">무</span>
                        <input type="radio" name="abnormal2_yn">
                        <span class="up">유</span>
                    </td>
                    <td class="tg-0pky">
                        <input type="text" style="width: 100%; border: 0">
                    </td>
                    <td class="tg-0pky"></td>
                </tr>
                <tr>
                    <td class="tg-0pky">
                        <input type="text" style="width: 100%; border: 0">
                    </td>
                    <td class="tg-0pky">
                        <input type="text" style="width: 100%; border: 0">
                    </td>
                    <td class="tg-0pky" colspan="2">
                        <input type="radio" name="abnormal3_yn" checked="checked">
                        <span class="up">무</span>
                        <input type="radio" name="abnormal3_yn">
                        <span class="up">유</span>
                    </td>
                    <td class="tg-0pky">
                        <input type="text" style="width: 100%; border: 0">
                    </td>
                    <td class="tg-0pky"></td>
                </tr>
                <tr>
                    <td class="tg-0pky">
                        <input type="text" style="width: 100%; border: 0">
                    </td>
                    <td class="tg-0pky">
                        <input type="text" style="width: 100%; border: 0">
                    </td>
                    <td class="tg-0pky" colspan="2">
                        <input type="radio" name="abnormal4_yn" checked="checked">
                        <span class="up">무</span>
                        <input type="radio" name="abnormal4_yn">
                        <span class="up">유</span>
                    </td>
                    <td class="tg-0pky">
                        <input type="text" style="width: 100%; border: 0">
                    </td>
                    <td class="tg-0pky"></td>
                </tr>
                <tr>
                    <td class="tg-0pky">
                        <input type="text" style="width: 100%; border: 0">
                    </td>
                    <td class="tg-0pky">
                        <input type="text" style="width: 100%; border: 0">
                    </td>
                    <td class="tg-0pky" colspan="2">
                        <input type="radio" name="abnormal5_yn" checked="checked">
                        <span class="up">무</span>
                        <input type="radio" name="abnormal5_yn">
                        <span class="up">유</span>
                    </td>
                    <td class="tg-0pky">
                        <input type="text" style="width: 100%; border: 0">
                    </td>
                    <td class="tg-0pky"></td>
                </tr>
                <tr>
                    <td class="tg-0pky">
                        <input type="text" style="width: 100%; border: 0">
                    </td>
                    <td class="tg-0pky">
                        <input type="text" style="width: 100%; border: 0">
                    </td>
                    <td class="tg-0pky" colspan="2">
                        <input type="radio" name="abnormal6_yn" checked="checked">
                        <span class="up">무</span>
                        <input type="radio" name="abnormal6_yn">
                        <span class="up">유</span>
                    </td>
                    <td class="tg-0pky">
                        <input type="text" style="width: 100%; border: 0">
                    </td>
                    <td class="tg-0pky"></td>
                </tr>
                <tr>
                    <td class="tg-0pky">
                        <input type="text" style="width: 100%; border: 0">
                    </td>
                    <td class="tg-0pky">
                        <input type="text" style="width: 100%; border: 0">
                    </td>
                    <td class="tg-0pky" colspan="2">
                        <input type="radio" name="abnormal7_yn" checked="checked">
                        <span class="up">무</span>
                        <input type="radio" name="abnormal7_yn">
                        <span class="up">유</span>
                    </td>
                    <td class="tg-0pky">
                        <input type="text" style="width: 100%; border: 0">
                    </td>
                    <td class="tg-0pky"></td>
                </tr>
                <tr>
                    <td class="tg-0pky">
                        <input type="text" style="width: 100%; border: 0">
                    </td>
                    <td class="tg-0pky">
                        <input type="text" style="width: 100%; border: 0">
                    </td>
                    <td class="tg-0pky" colspan="2">
                        <input type="radio" name="abnormal8_yn" checked="checked">
                        <span class="up">무</span>
                        <input type="radio" name="abnormal8_yn">
                        <span class="up">유</span>
                    </td>
                    <td class="tg-0pky">
                        <input type="text" style="width: 100%; border: 0">
                    </td>
                    <td class="tg-0pky"></td>
                </tr>
                <tr>
                    <td class="tg-0pky">
                        <input type="text" style="width: 100%; border: 0">
                    </td>
                    <td class="tg-0pky">
                        <input type="text" style="width: 100%; border: 0">
                    </td>
                    <td class="tg-0pky" colspan="2">
                        <input type="radio" name="abnormal9_yn" checked="checked">
                        <span class="up">무</span>
                        <input type="radio" name="abnormal9_yn">
                        <span class="up">유</span>
                    </td>
                    <td class="tg-0pky">
                        <input type="text" style="width: 100%; border: 0">
                    </td>
                    <td class="tg-0pky"></td>
                </tr>
                <tr>
                    <td class="tg-a123" colspan="7">작업자 PMIS Check 작업책임자 : (인)</td>
                </tr>
                <td rowspan="2" class="tg-a123" style="width:10%">Physical(신체)</td>
                <td colspan="3">
                    음주•약물복용 / 작업전(유)<input type="radio" id="Worker" value="유">(무)<input type="radio" id="Worker" value="무">
                    •중식후(유)<input type="radio" id="Worker" value="유">(무)<input type="radio" id="Worker" value="무">
                </td>
                <td rowspan="2" class="tg-a123" style="width:10%">Mental(정신)</td>
                <td colspan="2">분담작업 시행의지 (양)<input type="radio" id="Worker" value="유">
                    (불)<input type="radio" id="Worker" value="유"></td>
            </tr>
        </tr>
        <td colspan="3">
            신체상태(혈색 등) 이상<input type="radio" id="Worker" value="유">(무)<input type="radio" id="Worker" value="무">•중식후(유)
            <input type="radio" id="Worker" value="유">(무)<input type="radio" id="Worker" value="무">
        </td>
        <td colspan="3">가정사 등 Stress 여부(유)<input type="radio" id="Worker" value="유">
            (무)<input type="radio" id="Worker" value="유">
        </td>
    </tr>
</tr>
<td rowspan="2" class="tg-a123" style="width:10%">Intelligent(지성)</td>
<td colspan="3">분담작업 내용 숙지(양)<input type="radio" id="Worker" value="유">(불)<input type="radio" id="Worker" value="무"></td>
<td rowspan="2" class="tg-a123">Sensible(감성)</td>
<td colspan="2">충분한 숙면여부 (양)<input type="radio" id="Worker" value="유">
    (불)<input type="radio" id="Worker" value="유"></td>
</tr>
</tr>
<td colspan="3">안전작업수칙 숙지(유)<input type="radio" id="Worker" value="유">(무)<input type="radio" id="Worker" value="무">•중식후(유)<input type="radio" id="Worker" value="유">(무)<input type="radio" id="Worker" value="무"></td>
<td colspan="2">지시사항 반응정도 (양)<input type="radio" id="Worker" value="유">
(불)<input type="radio" id="Worker" value="유"></td>
</tr>
<tr>
<td colspan="7">※ 작업 중 발생한 안전사고 등으로 인한 신체이상 발생 시 담당자 등에게 즉시 통보 할 것
<br>
※ 신체상태 판단 방법 : ①음주, ② 혈압, ③ 산소포화도 측정 / 단, ②,③항은 건강상태 참고 사항<br>
- ②,③항의 건강에 이상이 있는 근로자는 일용직 근로자 관리카드 양식 활용 관리 시행
<br>
※ 작업자 PMIS Check (유) 또는 (불) 및 필수 안전조치사항 미이행 퇴거조치자 :<input type="text" id="Worker" value="">

</td>
</tr>
<tr>
    <td class="tg-a123" rowspan="13">근<br>로<br>자<br>참<br>여<br><br>위<br>험<br>성<br>평<br>가<br><br>및<br><br>교<br>육</td>
    <td class="tg-a123">구분</td>
    <td class="tg-a123">유해 위험요인</td>
    <td class="tg-a123" style="width: 90px;">위험성(현재)</td>
    <td class="tg-a123">위험감소 조치(방법)</td>
    <td class="tg-a123">위험성(조치시)</td>
    <td class="tg-a123">작업여부(가능/불가)</td>
</tr>
<tr>
    <td rowspan="3" class="tg-a123">사람</td>
    <td><input type="text" style="width: 100%; border: 0"></td>
    <td><input type="text" style="width: 100%; border: 0"></td>
    <td><input type="text" style="width: 100%; border: 0"></td>
    <td><input type="text" style="width: 100%; border: 0"></td>
    <td><input type="text" style="width: 100%; border: 0"></td>
</tr>
<tr>
<td>
        <input type="text" style="width: 100%; border: 0">
    </td>

    <td><input type="text" style="width: 100%; border: 0"></td>
    <td>
        <input type="text" style="width: 100%; border: 0">
    </td>
    <td>
        <input type="text" style="width: 100%; border: 0">
    </td>
    <td>
        <input type="text" style="width: 100%; border: 0">
    </td>
</tr>
<tr>
    <td>
        <input type="text" style="width: 100%; border: 0">
    </td>
    <td><input type="text" style="width: 100%; border: 0"></td>
    <td>
        <input type="text" style="width: 100%; border: 0">
    </td>
    <td>
        <input type="text" style="width: 100%; border: 0">
    </td>
    <td>
        <input type="text" style="width: 100%; border: 0">
    </td>
</tr>
<tr>
    <td rowspan="3" class="tg-a123">장비</td>
    <td><input type="text" style="width: 100%; border: 0"></td>
    <td><input type="text" style="width: 100%; border: 0"></td>
    <td><input type="text" style="width: 100%; border: 0"></td>
    <td><input type="text" style="width: 100%; border: 0"></td>
    <td><input type="text" style="width: 100%; border: 0"></td>
</tr>
<tr>
<td>
        <input type="text" style="width: 100%; border: 0">
    </td>

    <td><input type="text" style="width: 100%; border: 0"></td>
    <td>
        <input type="text" style="width: 100%; border: 0">
    </td>
    <td>
        <input type="text" style="width: 100%; border: 0">
    </td>
    <td>
        <input type="text" style="width: 100%; border: 0">
    </td>
</tr>
<tr>
    <td>
        <input type="text" style="width: 100%; border: 0">
    </td>
    <td><input type="text" style="width: 100%; border: 0"></td>
    <td>
        <input type="text" style="width: 100%; border: 0">
    </td>
    <td>
        <input type="text" style="width: 100%; border: 0">
    </td>
    <td>
        <input type="text" style="width: 100%; border: 0">
    </td>
</tr>
<tr>
    <td rowspan="3" class="tg-a123">환경</td>
    <td><input type="text" style="width: 100%; border: 0"></td>
    <td><input type="text" style="width: 100%; border: 0"></td>
    <td><input type="text" style="width: 100%; border: 0"></td>
    <td><input type="text" style="width: 100%; border: 0"></td>
    <td><input type="text" style="width: 100%; border: 0"></td>
</tr>
<tr>
<td>
        <input type="text" style="width: 100%; border: 0">
    </td>

    <td><input type="text" style="width: 100%; border: 0"></td>
    <td>
        <input type="text" style="width: 100%; border: 0">
    </td>
    <td>
        <input type="text" style="width: 100%; border: 0">
    </td>
    <td>
        <input type="text" style="width: 100%; border: 0">
    </td>
</tr>
<tr>
    <td>
        <input type="text" style="width: 100%; border: 0">
    </td>
    <td><input type="text" style="width: 100%; border: 0"></td>
    <td>
        <input type="text" style="width: 100%; border: 0">
    </td>
    <td>
        <input type="text" style="width: 100%; border: 0">
    </td>
    <td>
        <input type="text" style="width: 100%; border: 0">
    </td>
</tr>
<tr>
    <td rowspan="3" class="tg-a123">관리</td>
    <td><input type="text" style="width: 100%; border: 0"></td>
    <td><input type="text" style="width: 100%; border: 0"></td>
    <td><input type="text" style="width: 100%; border: 0"></td>
    <td><input type="text" style="width: 100%; border: 0"></td>
    <td><input type="text" style="width: 100%; border: 0"></td>
</tr>
<tr>
<td>
        <input type="text" style="width: 100%; border: 0">
    </td>

    <td><input type="text" style="width: 100%; border: 0"></td>
    <td>
        <input type="text" style="width: 100%; border: 0">
    </td>
    <td>
        <input type="text" style="width: 100%; border: 0">
    </td>
    <td>
        <input type="text" style="width: 100%; border: 0">
    </td>
</tr>
<tr>
    <td>
        <input type="text" style="width: 100%; border: 0">
    </td>
    <td><input type="text" style="width: 100%; border: 0"></td>
    <td>
        <input type="text" style="width: 100%; border: 0">
    </td>
    <td>
        <input type="text" style="width: 100%; border: 0">
    </td>
    <td>
        <input type="text" style="width: 100%; border: 0">
    </td>
</tr>

<tr>
<td colspan="3" align="center" class="tg-a123">위험성평가 및 관리 기준</td>
<td colspan="4" align="center" class="tg-a123">위험성평가 후 교육 서명란</td>
</tr>

<tr>
<td>위험성</td>
<td colspan="2">평가기준</td>
<td class="tg-a123">이름</td>
<td class="tg-a123">서명</td>
<td class="tg-a123">이름</td>
<td class="tg-a123">서명</td>
</tr>
<tr>
<td>상(20)</td>
<td colspan="2">위험이 장시간 상시 존재 or 사고시 중상 이상 위험</td>
<td>
<input type="text" style="width: 100%; border: 0">
</td>
<td>
<input type="text" style="width: 100%; border: 0">
</td>
<td>
<input type="text" style="width: 100%; border: 0">
</td>
<td>
<input type="text" style="width: 100%; border: 0">
</td>
</tr>

<tr>
<td>중(9~16)</td>
<td colspan="2">위험이 단시간 간헐적 존재 or 사고시 경상 위험</td>
<td>
<input type="text" style="width: 100%; border: 0">
</td>
<td>
<input type="text" style="width: 100%; border: 0">
</td>
<td>
<input type="text" style="width: 100%; border: 0">
</td>
<td>
<input type="text" style="width: 100%; border: 0">
</td>
</tr>
<tr>
<td>하(1~8)</td>
<td colspan="2">위험이 매우적음 or 사고시 타박상 이하 위험</td>
<td>
<input type="text" style="width: 100%; border: 0">
</td>
<td>
<input type="text" style="width: 100%; border: 0">
</td>
<td>
<input type="text" style="width: 100%; border: 0">
</td>
<td>
<input type="text" style="width: 100%; border: 0">
</td>
</tr>
<tr>
<td colspan="3" rowspan="7">※ 관리기준 : 상, 중 - 작업불가 / 하 - 작업가능<br>
※ 현재 위험성이 "하" 인 경우 위험감소 조치(방법)없이 작업가능<br>
※ 위험성 평가는 기 검토된 공정별 위험성평가 결과를 활용하여
<br>
작성•시행하며, 작업중 위험성 확인 및 조치는 본 위험성 평가의 위험<br>
감소 조치(방법)와 위험성Check List체크리스트에 준하여 시행<br>
※ 위험성 추정 : 가능성(5), 중대성(4), 곱으로 산출<br>
※ 업무분담 밑 부분은 수기작성, 워드작업 불가
</td>

</tr>
<tr>
<td>
<input type="text" style="width: 100%; border: 0">
</td>
<td>
<input type="text" style="width: 100%; border: 0">
</td>
<td>
<input type="text" style="width: 100%; border: 0">
</td>
<td>
<input type="text" style="width: 100%; border: 0">
</td>
</tr>
<tr>
<td>
<input type="text" style="width: 100%; border: 0">
</td>
<td>
<input type="text" style="width: 100%; border: 0">
</td>
<td>
<input type="text" style="width: 100%; border: 0">
</td>
<td>
<input type="text" style="width: 100%; border: 0">
</td>
</tr>
<tr>
<td>
<input type="text" style="width: 100%; border: 0">
</td>
<td>
<input type="text" style="width: 100%; border: 0">
</td>
<td>
<input type="text" style="width: 100%; border: 0">
</td>
<td>
<input type="text" style="width: 100%; border: 0">
</td>
</tr>
<tr>
<td>
<input type="text" style="width: 100%; border: 0">
</td>
<td>
<input type="text" style="width: 100%; border: 0">
</td>
<td>
<input type="text" style="width: 100%; border: 0">
</td>
<td>
<input type="text" style="width: 100%; border: 0">
</td>
</tr>

<tr>
<td>
<input type="text" style="width: 100%; border: 0">
</td>
<td>
<input type="text" style="width: 100%; border: 0">
</td>
<td>
<input type="text" style="width: 100%; border: 0">
</td>
<td>
<input type="text" style="width: 100%; border: 0">
</td>
</tr>
<tr>
<td colspan="4">
작업자는 산업재해가 발생할 급박한 위험이<br>
있는 경우 작업을 중지하고 대피할 수 있다.
</td>

</tr>
</tbody>
</table>

<br>

</body>
</html>
<button type="button" class="btn btn-m btn-outline-black" onclick="savePDF()">PDF 저장</button>

<script>
function savePDF() {
document
.getElementById("printArea")
.style
.borderColor = "black";

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
</body>
</html>