<?php
    // DBとの接続
    $db = mysqli_connect('localhost', 'root', '', 'tasks');
    mysqli_set_charset($db, 'utf8');

    $sql = sprintf('SELECT * FROM tasks WHERE id=%s',
          $_POST['task_id']
      );

    $record = mysqli_query($db, $sql);

    if ($task = mysqli_fetch_assoc($record)) {

        // string型で取得したデータをbool型に変換(キャスト)する

        // 値を反転させる 三項演算子


        header("Content-type: text/plain; charset=UTF-8");
        //ここに何かしらの処理を書く（DB登録やファイルへの書き込みなど）

        echo json_encode($data);
    }

?>
