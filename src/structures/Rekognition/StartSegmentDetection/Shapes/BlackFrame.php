<?php

namespace Sunaoka\Aws\Structures\Rekognition\StartSegmentDetection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float|null $MaxPixelThreshold
 * @property float|null $MinCoveragePercentage
 */
class BlackFrame extends Shape
{
    /**
     * @param array{
     *     MaxPixelThreshold?: float|null,
     *     MinCoveragePercentage?: float|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
