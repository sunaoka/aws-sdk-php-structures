<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Prefix
 * @property string $Suffix
 * @property NumericSeparatorConfiguration $SeparatorConfiguration
 * @property DecimalPlacesConfiguration $DecimalPlacesConfiguration
 * @property 'NONE'|'AUTO'|'THOUSANDS'|'MILLIONS'|'BILLIONS'|'TRILLIONS' $NumberScale
 * @property NegativeValueConfiguration $NegativeValueConfiguration
 * @property NullValueFormatConfiguration $NullValueFormatConfiguration
 */
class NumberDisplayFormatConfiguration extends Shape
{
    /**
     * @param array{
     *     Prefix?: string,
     *     Suffix?: string,
     *     SeparatorConfiguration?: NumericSeparatorConfiguration,
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
