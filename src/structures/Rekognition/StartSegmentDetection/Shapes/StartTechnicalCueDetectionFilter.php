<?php

namespace Sunaoka\Aws\Structures\Rekognition\StartSegmentDetection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $MinSegmentConfidence
 * @property BlackFrame $BlackFrame
 */
class StartTechnicalCueDetectionFilter extends Shape
{
    /**
     * @param array{
     *     MinSegmentConfidence?: float,
     *     BlackFrame?: BlackFrame
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
