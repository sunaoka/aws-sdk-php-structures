<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTopic\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $UseBlankCellFormat
 * @property string $BlankCellFormat
 * @property string $DateFormat
 * @property 'COMMA'|'DOT' $DecimalSeparator
 * @property string $GroupingSeparator
 * @property bool $UseGrouping
 * @property int $FractionDigits
 * @property string $Prefix
 * @property string $Suffix
 * @property 'NONE'|'AUTO'|'THOUSANDS'|'MILLIONS'|'BILLIONS'|'TRILLIONS' $UnitScaler
 * @property NegativeFormat $NegativeFormat
 * @property string $CurrencySymbol
 */
class DisplayFormatOptions extends Shape
{
    /**
     * @param array{
     *     UseBlankCellFormat?: bool,
     *     BlankCellFormat?: string,
     *     DateFormat?: string,
     *     DecimalSeparator?: 'COMMA'|'DOT',
     *     GroupingSeparator?: string,
     *     UseGrouping?: bool,
     *     FractionDigits?: int,
     *     Prefix?: string,
     *     Suffix?: string,
     *     UnitScaler?: 'NONE'|'AUTO'|'THOUSANDS'|'MILLIONS'|'BILLIONS'|'TRILLIONS',
     *     NegativeFormat?: NegativeFormat,
     *     CurrencySymbol?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
