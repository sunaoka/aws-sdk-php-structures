<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DateTimeFormat
 * @property NullValueFormatConfiguration|null $NullValueFormatConfiguration
 * @property NumericFormatConfiguration|null $NumericFormatConfiguration
 */
class DateTimeFormatConfiguration extends Shape
{
    /**
     * @param array{
     *     DateTimeFormat?: string|null,
     *     NullValueFormatConfiguration?: NullValueFormatConfiguration|null,
     *     NumericFormatConfiguration?: NumericFormatConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
