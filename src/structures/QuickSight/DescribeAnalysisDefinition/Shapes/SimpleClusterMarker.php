<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Color
 */
class SimpleClusterMarker extends Shape
{
    /**
     * @param array{Color?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
