<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\ListLaunches\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $evaluationOrder
 * @property string $segment
 * @property array<string, int<0, 100000>> $weights
 */
class SegmentOverride extends Shape
{
    /**
     * @param array{
     *     evaluationOrder: int,
     *     segment: string,
     *     weights: array<string, int<0, 100000>>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
