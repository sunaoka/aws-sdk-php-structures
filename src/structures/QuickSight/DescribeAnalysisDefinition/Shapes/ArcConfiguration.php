<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $ArcAngle
 * @property 'SMALL'|'MEDIUM'|'LARGE'|null $ArcThickness
 */
class ArcConfiguration extends Shape
{
    /**
     * @param array{
     *     ArcAngle?: double|null,
     *     ArcThickness?: 'SMALL'|'MEDIUM'|'LARGE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
