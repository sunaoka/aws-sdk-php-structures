<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTopic\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $UseBlankCellFormat
 * @property string|null $BlankCellFormat
 * @property string|null $DateFormat
 * @property 'COMMA'|'DOT'|null $DecimalSeparator
 * @property string|null $GroupingSeparator
 * @property bool|null $UseGrouping
 * @property int|null $FractionDigits
 * @property string|null $Prefix
 * @property string|null $Suffix
 * @property 'NONE'|'AUTO'|'THOUSANDS'|'MILLIONS'|'BILLIONS'|'TRILLIONS'|null $UnitScaler
 * @property NegativeFormat|null $NegativeFormat
 * @property string|null $CurrencySymbol
 */
class DisplayFormatOptions extends Shape
{
    /**
     * @param array{
     *     UseBlankCellFormat?: bool|null,
     *     BlankCellFormat?: string|null,
     *     DateFormat?: string|null,
     *     DecimalSeparator?: 'COMMA'|'DOT'|null,
     *     GroupingSeparator?: string|null,
     *     UseGrouping?: bool|null,
     *     FractionDigits?: int|null,
     *     Prefix?: string|null,
     *     Suffix?: string|null,
     *     UnitScaler?: 'NONE'|'AUTO'|'THOUSANDS'|'MILLIONS'|'BILLIONS'|'TRILLIONS'|null,
     *     NegativeFormat?: NegativeFormat|null,
     *     CurrencySymbol?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
