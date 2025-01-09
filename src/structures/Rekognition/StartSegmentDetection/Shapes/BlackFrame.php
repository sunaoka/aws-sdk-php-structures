<?php

namespace Sunaoka\Aws\Structures\Rekognition\StartSegmentDetection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $MaxPixelThreshold
 * @property float $MinCoveragePercentage
 */
class BlackFrame extends Shape
{
    /**
     * @param array{
     *     MaxPixelThreshold?: float,
     *     MinCoveragePercentage?: float
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
