<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TotalBarLabel
 */
class WaterfallChartOptions extends Shape
{
    /**
     * @param array{TotalBarLabel?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
