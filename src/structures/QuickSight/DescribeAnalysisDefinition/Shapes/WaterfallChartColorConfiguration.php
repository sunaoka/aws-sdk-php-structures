<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WaterfallChartGroupColorConfiguration $GroupColorConfiguration
 */
class WaterfallChartColorConfiguration extends Shape
{
    /**
     * @param array{GroupColorConfiguration?: WaterfallChartGroupColorConfiguration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
