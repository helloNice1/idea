function extract_amount_from_message($message) {
    preg_match('/([+-]?\d+(\.\d+)?)\s*(元|元钱|元整|块|元人民币|￥)/', $message, $matches);
    if (isset($matches[1])) {
        return (float) $matches[1];
    } else {
        return 0;
    }
}

$message = "尊敬的用户，您的账户余额为10.23元。";
$amount = extract_amount_from_message($message);
echo "提取到的金额是：".$amount;