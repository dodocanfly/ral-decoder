<?php

declare(strict_types=1);

error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once __DIR__ . '/../vendor/autoload.php';

use Dodocanfly\RalDecoder\RalName;
use Dodocanfly\RalDecoder\RalDecoder;

$ralNameEn = new RalName();
$ralNameDe = new RalName('de');

$rals = [9002, 6007, 7013];
foreach ($rals as $ral) {
    echo 'RAL ' . $ral . ' has name "'. $ralNameEn->for($ral) .'" (DE: "'. $ralNameDe->for($ral) .'")' . "\n";
    echo 'RAL ' . $ral . ' => hex: ' . RalDecoder::toHex($ral) . "\n";
    echo 'RAL ' . $ral . ' => rgbStr: ' . RalDecoder::toRgbStr($ral) . "\n";
    echo 'RAL ' . $ral . ' => cssRgbStr: ' . RalDecoder::toCssRgbStr($ral) . "\n";
    echo 'RAL ' . $ral . ' is dark? ' . (int)RalDecoder::isDark($ral) . "\n";
    print_r(RalDecoder::toRgb($ral));
    echo "\n";
}
