<?php
    ini_set('max_execution_time', '0');
    function resumir_instancia(){
        $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.chatpro.com.br/painel/ajax/userInstance.php',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'action=changeStatus&instance=chatpro-g1atrb25x6&status=1',
  CURLOPT_HTTPHEADER => array(
    'Accept: */*',
    'Accept-Language: pt-BR,pt;q=0.9,en-US;q=0.8,en;q=0.7',
    'Connection: keep-alive',
    'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
    'Cookie: _ga=GA1.3.1594115004.1650460439; _gid=GA1.3.178621646.1650460439; _gcl_au=1.1.106273476.1650460439; apictp_painel_email=anakarlarodriguesca%40gmail.com; apictp_painel_senha=552f9d49aced8430a7e029e59c2c3128ba90aac0; apictp_painel_id=8928',
    'Origin: https://api.chatpro.com.br',
    'Referer: https://api.chatpro.com.br/painel/dashboard.php',
    'Sec-Fetch-Dest: empty',
    'Sec-Fetch-Mode: cors',
    'Sec-Fetch-Site: same-origin',
    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.127 Safari/537.36',
    'X-Requested-With: XMLHttpRequest',
    'sec-ch-ua: " Not A;Brand";v="99", "Chromium";v="100", "Google Chrome";v="100"',
    'sec-ch-ua-mobile: ?0',
    'sec-ch-ua-platform: "Windows"'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response.PHP_EOL.PHP_EOL;
    }

    function obtem_status_instancia(){
        $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.chatpro.com.br/painel/dashboard.php',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'ajax=status&id_instance=9213&id_user=8928',
  CURLOPT_HTTPHEADER => array(
    'Accept: */*',
    'Accept-Language: pt-BR,pt;q=0.9,en-US;q=0.8,en;q=0.7',
    'Connection: keep-alive',
    'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
    'Cookie: _ga=GA1.3.1594115004.1650460439; _gid=GA1.3.178621646.1650460439; _gcl_au=1.1.106273476.1650460439; apictp_painel_email=anakarlarodriguesca%40gmail.com; apictp_painel_senha=552f9d49aced8430a7e029e59c2c3128ba90aac0; apictp_painel_id=8928',
    'Origin: https://api.chatpro.com.br',
    'Referer: https://api.chatpro.com.br/painel/dashboard.php',
    'Sec-Fetch-Dest: empty',
    'Sec-Fetch-Mode: cors',
    'Sec-Fetch-Site: same-origin',
    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.127 Safari/537.36',
    'X-Requested-With: XMLHttpRequest',
    'sec-ch-ua: " Not A;Brand";v="99", "Chromium";v="100", "Google Chrome";v="100"',
    'sec-ch-ua-mobile: ?0',
    'sec-ch-ua-platform: "Windows"'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response.PHP_EOL.PHP_EOL;
return $response;
    }

    function recarregar(){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://v4.chatpro.com.br/chatpro-g1atrb25x6/api/v1/reload',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Authorization: f2vyzisbm0xr1w7ua58ttugc4c2dxg',
            'cache-control: no-cache',
            'accept: application/json'
        ),
        ));

        $response = json_decode(curl_exec($curl), TRUE);

        curl_close($curl);
        return $response;
    }

    function pacientes_cadastrados(){
        global $token;
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://app.imedicina.com.br/api/patient/bytext/2000/1/ASC?text=',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'authority: app.imedicina.com.br',
            'sec-ch-ua: "Chromium";v="92", " Not A;Brand";v="99", "Google Chrome";v="92"',
            'tracestate: 1497750@nr=0-1-1497750-615157523-cc34ed5b60cee6f4----1630838019370',
            'traceparent: 00-62a77da5554fa6fc23e53e3d3a9d75c0-cc34ed5b60cee6f4-01',
            'x-imed-active-professional: 1320462',
            'authorization: Bearer '.$token,
            'accept: application/json, text/plain, */*',
            'charset: UTF-8',
            'sec-ch-ua-mobile: ?0',
            'x-requested-with: XMLHttpRequest',
            'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36',
            'timezone: America/Sao_Paulo',
            'sec-fetch-site: same-origin',
            'sec-fetch-mode: cors',
            'sec-fetch-dest: empty',
            'referer: https://app.imedicina.com.br/',
            'accept-language: pt-BR,pt;q=0.9,en-US;q=0.8,en;q=0.7',
            'cookie: _fbp=fb.2.1626048017692.565056005; _ga=GA1.4.1277817239.1626048018; _gcl_au=1.1.290023820.1626048018; messagesUtk=b1097464129e4acfb6c4159e75ee86b1; __hs_opt_out=no; _gid=GA1.4.1499285164.1630837962; _gat_UA-80165400-1=1; _gid=GA1.3.1499285164.1630837962; _clck=1sspteq|1|euh|0; _ga_30BH6QRZL4=GS1.1.1630837962.6.0.1630837969.0; _ga=GA1.3.1277817239.1626048018; _clsk=1isbhy6|1630837975122|2|1|e.clarity.ms/collect; __hstc=240896348.5aa081cd84905521714416d88ed9b2b6.1626048023601.1629245967362.1630837979909.6; __hssrc=1; __hssc=240896348.1.1630837979909'
        ),
        ));

        $response = curl_exec($curl);
        $pacientes = json_decode($response, TRUE);
        curl_close($curl);
        return $pacientes["content"];
    }


    function consultas_marcadas($consultorio){
        $today = date("Y-m-d");
        $amanha = date('Y-m-d', strtotime($today. ' + 1 days'));
        $depois_de_amanha = date('Y-m-d', strtotime($today. ' + 2 days'));
        global $token;

        $id_consultorio = array('c1' => 1320463, 'c2' => 1984452, 'c3' => 2835689);

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://app.imedicina.com.br/api/event/fullcalendarbyfilter/false?healthProfessionalId=1320462&clinicId='.$id_consultorio[$consultorio].'&loadEmptySlots=false&loadWorkIntervals=true&loadHoliDays=true&calendarView=agendaWeek&start='.$amanha.'&end='.$depois_de_amanha.'&timezone=America%252FSao_Paulo&_=1630839488043',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'authority: app.imedicina.com.br',
            'sec-ch-ua: "Chromium";v="92", " Not A;Brand";v="99", "Google Chrome";v="92"',
            'tracestate: 1497750@nr=0-1-1497750-615157523-f793a38e07cbc36b----1630839493036',
            'traceparent: 00-c03f4ec6d1032d53ac7763162a57d620-f793a38e07cbc36b-01',
            'sec-ch-ua-mobile: ?0',
            'authorization: Bearer '.$token,
            'accept: application/json, text/javascript, */*; q=0.01',
            'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36',
            'x-requested-with: XMLHttpRequest',
            'sec-fetch-site: same-origin',
            'sec-fetch-mode: cors',
            'sec-fetch-dest: empty',
            'referer: https://app.imedicina.com.br/',
            'accept-language: pt-BR,pt;q=0.9,en-US;q=0.8,en;q=0.7',
            'cookie: _fbp=fb.2.1626048017692.565056005; _ga=GA1.4.1277817239.1626048018; _gcl_au=1.1.290023820.1626048018; messagesUtk=b1097464129e4acfb6c4159e75ee86b1; __hs_opt_out=no; _gid=GA1.4.1499285164.1630837962; _gid=GA1.3.1499285164.1630837962; _clck=1sspteq|1|euh|0; _ga_30BH6QRZL4=GS1.1.1630837962.6.0.1630837969.0; _ga=GA1.3.1277817239.1626048018; __hstc=240896348.5aa081cd84905521714416d88ed9b2b6.1626048023601.1629245967362.1630837979909.6; __hssrc=1; _clsk=1isbhy6|1630838531749|4|1|e.clarity.ms/collect; __hssc=240896348.3.1630837979909; _gat_UA-80165400-1=1'
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $consultas = json_decode($response, TRUE);
        return $consultas;
    }

    function contato_dos_pacientes($consultorio){
        $consultas = consultas_marcadas($consultorio);
        $pacientes = pacientes_cadastrados();
        $contando = 0;
        $date = date("Y-m-d");
        $dayofweek = date('w', strtotime($date));
        if($consultorio == 'c2'){
            $incremento = 6;
        }elseif($consultorio == 'c1' && $dayofweek == 4){
            $incremento = 3;
        }else{
            $incremento = 0;
        }
        $mensagem_consultorio = array('c1' => '*Lembretes do Consultório Odontológico 1:*\\n\\n', 'c2' => '*Lembretes do Consultório Médico:*\\n\\n', 'c3' => '*Lembretes do Consultório Odontológico 2:*\\n\\n');
        $mensagem_confirm = $mensagem_consultorio[$consultorio];
        if(array_key_exists("0", $consultas)){
            $id = $consultas['0']['id'];
            $primeira_consulta = $consultas[0];
            if(array_key_exists("startTextDate", $consultas[0])){
            $hora_ex_primeira_consulta = substr(explode(' ', trim($primeira_consulta["startTextDate"] ))[1], 0, 5);
            $hora_primeira_consulta = substr($hora_ex_primeira_consulta, 0, 2)-3;
            }
        }else{
            $mensagem_confirm = $mensagem_confirm . "_Sem consultas agendadas_";
        }
        $i = 0;
        
        foreach($consultas as $consulta){
            $contagem = 0;
            if(array_key_exists("startTextDate", $consulta)){
                $hora_ex = substr(explode(' ', trim($consulta["startTextDate"] ))[1], 0, 5);
                $hora = substr($hora_ex, 0, 2)-3;
                $minutos = substr($hora_ex, 3, 2);
            }
            if(array_key_exists("eventPatientId", $consulta)){
                foreach($pacientes as $paciente){
                    if($paciente["patientId"] == $consulta["eventPatientId"]){
                        if(array_key_exists("phone", $paciente)){
                            $telefone = $paciente["phone"];
                            $nome = explode(' ', trim($paciente["name"] ))[0];
                            for($i=0;$i<3;$i++){
                                $resposta = envia_lembrete($telefone, $nome, $hora, $minutos, $incremento, $hora_primeira_consulta);
                                if(array_key_exists("message", $resposta)){
                                    if($resposta['message'] == "Mensagem Enviada" || $resposta['message'] == "number not exist in whatsapp"){
                                        break;
                                    }
                                }
                            }
                            if(array_key_exists("message", $resposta)){
                                if($resposta['message'] == "Mensagem Enviada"){
                                    $mensagem_confirm = $mensagem_confirm . $nome . " (" . $hora . "h" . $minutos . ") 🟢\\n";
                                }elseif($resposta['message'] == "number not exist in whatsapp"){
                                    $mensagem_confirm = $mensagem_confirm . $nome . " (" . $hora . "h" . $minutos . ") ⚫ Whatsapp não existe\\n";
                                }
                            }elseif(array_key_exists("erro", $resposta)){
                                if($resposta['erro'] == true){
                                    $mensagem_confirm = $mensagem_confirm . $nome . " (" . $hora . "h" . $minutos . ") ⚫ Erro\\n";
                                }
                            }if(array_key_exists("status", $resposta)){
                                if($resposta['status'] == false){
                                    $mensagem_confirm = $mensagem_confirm . $nome . " (" . $hora . "h" . $minutos . ") ⚫ Erro\\n";
                                }
                            }
                        }
                        $contagem = 1;
                        break;
                    }
                }if($contagem == 0){
                    $mensagem_confirm = $mensagem_confirm . $nome . " (" . $hora . "h" . $minutos . ") ⚫ Telefone não cadastrado\\n";
                }
            }
            $i++;
        }envia_mensagem($mensagem_confirm) . "<br>";
    }

    function envia_mensagem($mensagem){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://v4.chatpro.com.br/chatpro-g1atrb25x6/api/v1/send_message",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "{\r\n  \"menssage\": \"".$mensagem."\",\r\n  \"number\": \"5583999711150\"\r\n}",
        CURLOPT_HTTPHEADER => array(
            "Authorization: f2vyzisbm0xr1w7ua58ttugc4c2dxg",
            "cache-control: no-cache",
            "Content-Type: application/json"
        ),
        ));
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);
        
        if ($err) {
        echo "cURL Error #:" . $err.PHP_EOL.PHP_EOL;
        } else {
        echo $response.PHP_EOL.PHP_EOL;
        }

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://v4.chatpro.com.br/chatpro-g1atrb25x6/api/v1/send_message",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "{\r\n  \"menssage\": \"".$mensagem."\",\r\n  \"number\": \"5583991393625\"\r\n}",
        CURLOPT_HTTPHEADER => array(
            "Authorization: f2vyzisbm0xr1w7ua58ttugc4c2dxg",
            "cache-control: no-cache",
            "Content-Type: application/json"
        ),
        ));
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);
        
        if ($err) {
        echo "cURL Error #:" . $err.PHP_EOL.PHP_EOL;
        } else {
        echo $response.PHP_EOL.PHP_EOL;
        }

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://v4.chatpro.com.br/chatpro-g1atrb25x6/api/v1/send_message",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "{\r\n  \"menssage\": \"".$mensagem."\",\r\n  \"number\": \"5583996379966\"\r\n}",
        CURLOPT_HTTPHEADER => array(
            "Authorization: f2vyzisbm0xr1w7ua58ttugc4c2dxg",
            "cache-control: no-cache",
            "Content-Type: application/json"
        ),
        ));
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);
        
        if ($err) {
        echo "cURL Error #:" . $err.PHP_EOL.PHP_EOL;
        } else {
        echo $response.PHP_EOL.PHP_EOL;
        }

        return $response;
    }

    function pegar_token(){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://app.imedicina.com.br/security/oauth/token',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => 'username=consultoriodraanakarla%40gmail.com&password=Consultorio2020ana%40&grant_type=password&client_id=imed_api',
        CURLOPT_HTTPHEADER => array(
            'authority: app.imedicina.com.br',
            'sec-ch-ua: "Chromium";v="92", " Not A;Brand";v="99", "Google Chrome";v="92"',
            'tracestate: 1497750@nr=0-1-1497750-615157523-96a109d3b3ca4725----1631035649088',
            'traceparent: 00-c637294cd7dff7e53ca3ad2a131f9de0-96a109d3b3ca4725-01',
            'sec-ch-ua-mobile: ?0',
            'authorization: Basic aW1lZF9hcGk6c2VjcmV0',
            'content-type: application/x-www-form-urlencoded',
            'accept: application/json, text/plain, */*',
            'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36',
            'origin: https://app.imedicina.com.br',
            'sec-fetch-site: same-origin',
            'sec-fetch-mode: cors',
            'sec-fetch-dest: empty',
            'referer: https://app.imedicina.com.br/i/login',
            'accept-language: pt-BR,pt;q=0.9,en-US;q=0.8,en;q=0.7',
            'cookie: _fbp=fb.2.1626048017692.565056005; _ga=GA1.4.1277817239.1626048018; _gcl_au=1.1.290023820.1626048018; messagesUtk=b1097464129e4acfb6c4159e75ee86b1; __hs_opt_out=no; _gid=GA1.4.427117924.1631034991; _gid=GA1.3.427117924.1631034991; _clck=1sspteq|1|euj|0; __hstc=240896348.5aa081cd84905521714416d88ed9b2b6.1626048023601.1630837979909.1631035010279.7; __hssrc=1; _gat_UA-80165400-1=1; hubspotutk=5aa081cd84905521714416d88ed9b2b6; _ga=GA1.1.1277817239.1626048018; _clsk=5ntys6|1631035636558|8|1|e.clarity.ms/collect; __hssc=240896348.6.1631035010279; _ga_30BH6QRZL4=GS1.1.1631034991.7.1.1631035639.0'
        ),
        ));

        $response = json_decode(curl_exec($curl), TRUE);

        curl_close($curl);
        return $response["access_token"];
    }
    function envia_lembrete($telefone, $nome, $hora, $minutos, $incremento, $hora_primeira_consulta){
        $curl = curl_init();
        if($incremento == 0){
        $horario = $hora."h".$minutos;
        
        $teste = "Olá, ".$nome.". Este é um lembrete da sua consulta na Bem Estar amanhã às ".$horario.". Vai ser um prazer receber você 😊";

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://v4.chatpro.com.br/chatpro-g1atrb25x6/api/v1/send_message",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "{\r\n  \"menssage\": \"Olá, ".$nome.". Este é um lembrete da sua consulta na Bem Estar amanhã às ".$horario.". Vai ser um prazer receber você 😊\",\r\n  \"number\": \"55".$telefone."\"\r\n}",
        CURLOPT_HTTPHEADER => array(
            "Authorization: f2vyzisbm0xr1w7ua58ttugc4c2dxg",
            "cache-control: no-cache",
            "Content-Type: application/json"
        ),
        ));
        }else{
            for($i=0;$i<=3;$i++){
                if($hora>=($hora_primeira_consulta+$incremento*$i) && $hora<($hora_primeira_consulta+$incremento*($i+1))){
                    $hora = $hora_primeira_consulta + $incremento * $i;
                    break;
                }
            }
            $horario = $hora."h00";

            $teste = "Olá, ".$nome.". Este é um lembrete da sua consulta na Bem Estar amanhã. Sua consulta é por ordem de chegada, a partir das ".$horario.". Vai ser um prazer receber você 😊";

            curl_setopt_array($curl, array(
            CURLOPT_URL => "https://v4.chatpro.com.br/chatpro-g1atrb25x6/api/v1/send_message",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "{\r\n  \"menssage\": \"Olá, ".$nome.". Este é um lembrete da sua consulta na Bem Estar amanhã. Sua consulta é por ordem de chegada, a partir das ".$horario.". Vai ser um prazer receber você 😊\",\r\n  \"number\": \"55".$telefone."\"\r\n}",
            CURLOPT_HTTPHEADER => array(
                "Authorization: f2vyzisbm0xr1w7ua58ttugc4c2dxg",
                "cache-control: no-cache",
                "Content-Type: application/json"
            ),
            ));
        }
        echo $teste.PHP_EOL.PHP_EOL;
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);
        $resposta = json_decode($response, TRUE);
        if ($err) {
        echo "cURL Error #:" . $err.PHP_EOL.PHP_EOL;
        } else {
        echo $response.PHP_EOL.PHP_EOL;
        }
        if(!is_array($resposta)){
            $resposta = array("erro"=>true);
        }
        return $resposta;
    }
    
    function aniversario(){
    
    $pacientes = pacientes_cadastrados();
    $today = date("Y-m-d");
    foreach($pacientes as $paciente){
        $data_texto = explode('T', trim($paciente["birthDate"]))[0];
        if(date('m-d', strtotime($today)) == substr($data_texto,5,5)){
            $aniversariante[$paciente["phone"]] = [$paciente["name"], $paciente["phone"]];
        }
        
    }
    if(isset($aniversariante)){
        foreach($aniversariante as $cliente){
            envia_aniversario($cliente[1], $cliente[0]);
        }
    }
    }
    function envia_confirmacao(){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://v4.chatpro.com.br/chatpro-g1atrb25x6/api/v1/send_message",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "{\r\n  \"menssage\": \"Mensagens enviadas!\",\r\n  \"number\": \"5583996379966\"\r\n}",
        CURLOPT_HTTPHEADER => array(
            "Authorization: f2vyzisbm0xr1w7ua58ttugc4c2dxg",
            "cache-control: no-cache",
            "Content-Type: application/json"
        ),
        ));
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);
        
        if ($err) {
        echo "cURL Error #:" . $err.PHP_EOL.PHP_EOL;
        } else {
        echo $response.PHP_EOL.PHP_EOL;
        }
    }
    function envia_aniversario($telefone, $nome){
        $nome = explode(' ', trim($nome))[0];
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://v4.chatpro.com.br/chatpro-g1atrb25x6/api/v1/send_message",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "{\r\n  \"menssage\": \"Feliz Aniversário, ".$nome.". Drª. Ana Karla e toda a equipe da Bem Estar deseja-lhe um dia abençoado! 😊\",\r\n  \"number\": \"55".$telefone."\"\r\n}",
        CURLOPT_HTTPHEADER => array(
            "Authorization: f2vyzisbm0xr1w7ua58ttugc4c2dxg",
            "cache-control: no-cache",
            "Content-Type: application/json"
        ),
        ));
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);
        
        if ($err) {
        echo "cURL Error #:" . $err.PHP_EOL.PHP_EOL;
        } else {
        echo $response.PHP_EOL.PHP_EOL;
        }
    }

    function pausa_instancia(){
        $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.chatpro.com.br/painel/ajax/userInstance.php',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'action=changeStatus&instance=chatpro-g1atrb25x6&status=0',
  CURLOPT_HTTPHEADER => array(
    'Connection: keep-alive',
    'sec-ch-ua: " Not A;Brand";v="99", "Chromium";v="99", "Google Chrome";v="99"',
    'Accept: */*',
    'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
    'X-Requested-With: XMLHttpRequest',
    'sec-ch-ua-mobile: ?0',
    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.82 Safari/537.36',
    'sec-ch-ua-platform: "Windows"',
    'Origin: https://api.chatpro.com.br',
    'Sec-Fetch-Site: same-origin',
    'Sec-Fetch-Mode: cors',
    'Sec-Fetch-Dest: empty',
    'Referer: https://api.chatpro.com.br/painel/dashboard.php',
    'Accept-Language: pt-BR,pt;q=0.9,en-US;q=0.8,en;q=0.7',
    'Cookie: _ga=GA1.3.1217190686.1634565765; _gcl_au=1.1.1935804183.1642344672; _gid=GA1.3.107411704.1648389006'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response.PHP_EOL.PHP_EOL;
    }

    $token = pegar_token();
    /*for($i=0;$i<=40;$i++){
        $recarregar = recarregar();
        if(array_key_exists('status', $recarregar)){
            if($recarregar['status'] == "ok"){
                break;
            }
        }
        sleep(600);
    }*/
    #resumir_instancia();
    $conectou = 0;
    for($i=0;$i<30;$i++){
        #sleep(20);
        $status = obtem_status_instancia();
        if($status == 'true'){
            contato_dos_pacientes('c1');
            contato_dos_pacientes('c3');
            contato_dos_pacientes('c2');
            aniversario();
            envia_confirmacao();
            //pausa_instancia();
            $conectou = 1;
            break;
        }
    }
    if($conectou == 0){
        $APIurl = 'https://eu27.chat-api.com/instance194066/';
        $token = 'nijbp88m5fkl2w0r';
        $dados = file_get_contents($APIurl."sendMessage?token=".$token."&chatId=5583999711150@c.us&body=".urlencode("Mensagens não puderam ser enviadas!"));
        echo $dados;
    }
?>