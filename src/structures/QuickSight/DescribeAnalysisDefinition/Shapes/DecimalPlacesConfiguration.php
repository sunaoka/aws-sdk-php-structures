<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 20> $DecimalPlaces
 */
class DecimalPlacesConfiguration extends Shape
{
    /**
     * @param array{DecimalPlaces: int<0, 20>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
