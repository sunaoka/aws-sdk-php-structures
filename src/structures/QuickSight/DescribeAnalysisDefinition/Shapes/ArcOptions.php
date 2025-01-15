<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SMALL'|'MEDIUM'|'LARGE'|'WHOLE'|null $ArcThickness
 */
class ArcOptions extends Shape
{
    /**
     * @param array{ArcThickness?: 'SMALL'|'MEDIUM'|'LARGE'|'WHOLE'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
