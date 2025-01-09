<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Prefix
 * @property string $Suffix
 * @property NumericSeparatorConfiguration $SeparatorConfiguration
 * @property DecimalPlacesConfiguration $DecimalPlacesConfiguration
 * @property NegativeValueConfiguration $NegativeValueConfiguration
 * @property NullValueFormatConfiguration $NullValueFormatConfiguration
 */
class PercentageDisplayFormatConfiguration extends Shape
{
    /**
     * @param array{
     *     Prefix?: string,
     *     Suffix?: string,
     *     SeparatorConfiguration?: NumericSeparatorConfiguration,
     *     DecimalPlacesConfiguration?: DecimalPlacesConfiguration,
     *     NegativeValueConfiguration?: NegativeValueConfiguration,
     *     NullValueFormatConfiguration?: NullValueFormatConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
