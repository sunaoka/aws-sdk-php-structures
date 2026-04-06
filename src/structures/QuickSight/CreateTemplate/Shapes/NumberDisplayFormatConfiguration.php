<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Prefix
 * @property string|null $Suffix
 * @property NumericSeparatorConfiguration|null $SeparatorConfiguration
 * @property DecimalPlacesConfiguration|null $DecimalPlacesConfiguration
 * @property 'NONE'|'AUTO'|'THOUSANDS'|'MILLIONS'|'BILLIONS'|'TRILLIONS'|'LAKHS'|'CRORES'|null $NumberScale
 * @property NegativeValueConfiguration|null $NegativeValueConfiguration
 * @property NullValueFormatConfiguration|null $NullValueFormatConfiguration
 */
class NumberDisplayFormatConfiguration extends Shape
{
    /**
     * @param array{
     *     Prefix?: string|null,
     *     Suffix?: string|null,
     *     SeparatorConfiguration?: NumericSeparatorConfiguration|null,
     *     DecimalPlacesConfiguration?: DecimalPlacesConfiguration|null,
     *     NumberScale?: 'NONE'|'AUTO'|'THOUSANDS'|'MILLIONS'|'BILLIONS'|'TRILLIONS'|'LAKHS'|'CRORES'|null,
     *     NegativeValueConfiguration?: NegativeValueConfiguration|null,
     *     NullValueFormatConfiguration?: NullValueFormatConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
