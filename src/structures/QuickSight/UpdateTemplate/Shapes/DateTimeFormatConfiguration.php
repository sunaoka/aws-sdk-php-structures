<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DateTimeFormat
 * @property NullValueFormatConfiguration $NullValueFormatConfiguration
 * @property NumericFormatConfiguration $NumericFormatConfiguration
 */
class DateTimeFormatConfiguration extends Shape
{
    /**
     * @param array{
     *     DateTimeFormat?: string,
     *     NullValueFormatConfiguration?: NullValueFormatConfiguration,
     *     NumericFormatConfiguration?: NumericFormatConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
