<?php
date_default_timezone_set('Asia/Tokyo');
echo '現在は、' . date ('G時 i分 s秒'). 'です';//dateはfunction
?>


<!-- date(string $format, ?int $timestamp = null): string
指定された引数 timestamp を、与えられた フォーマット文字列によりフォーマットし、日付文字列を返します。 
タイムスタンプが与えられない場合は、現在の時刻が使われます。 つまり timestamp はオプションであり そのデフォルト値は time() の値です。

パラメータ ¶
format
DateTimeInterface::format() が受け入れるフォーマット。

timestamp
オプションのパラメータ timestamp は、 int 型の Unix タイムスタンプです。 
timestamp が指定されなかったり、null だった場合のデフォルト値は、 現在の時刻です。
言い換えると、デフォルトは time() の返り値となります。 -->