<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Prefix
 * @property string $Suffix
 * @property NumericSeparatorConfiguration $SeparatorConfiguration
 * @property string $Symbol
 * @property DecimalPlacesConfiguration $DecimalPlacesConfiguration
 * @property 'NONE'|'AUTO'|'THOUSANDS'|'MILLIONS'|'BILLIONS'|'TRILLIONS' $NumberScale
 * @property NegativeValueConfiguration $NegativeValueConfiguration
 * @property NullValueFormatConfiguration $NullValueFormatConfiguration
 */
class CurrencyDisplayFormatConfiguration extends Shape
{
    /**
     * @param array{
     *     Prefix?: string,
     *     Suffix?: string,
     *     SeparatorConfiguration?: NumericSeparatorConfiguration,
     *     Symbol?: string,
     *     DecimalPlacesConfiguration?: DecimalPlacesConfiguration,
     *     NumberScale?: 'NONE'|'AUTO'|'THOUSANDS'|'MILLIONS'|'BILLIONS'|'TRILLIONS',
     *     NegativeValueConfiguration?: NegativeValueConfiguration,
     *     NullValueFormatConfiguration?: NullValueFormatConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
