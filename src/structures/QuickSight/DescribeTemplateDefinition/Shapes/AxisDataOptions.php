<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NumericAxisOptions $NumericAxisOptions
 * @property DateAxisOptions $DateAxisOptions
 */
class AxisDataOptions extends Shape
{
    /**
     * @param array{
     *     NumericAxisOptions?: NumericAxisOptions,
     *     DateAxisOptions?: DateAxisOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
