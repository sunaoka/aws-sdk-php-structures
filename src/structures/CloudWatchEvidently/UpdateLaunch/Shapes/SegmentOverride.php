<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\UpdateLaunch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $evaluationOrder
 * @property string $segment
 * @property array<string, int> $weights
 */
class SegmentOverride extends Shape
{
    /**
     * @param array{
     *     evaluationOrder: int,
     *     segment: string,
     *     weights: array<string, int>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
