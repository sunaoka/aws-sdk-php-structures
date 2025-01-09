<?php

namespace Sunaoka\Aws\Structures\Rekognition\StartSegmentDetection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $MinSegmentConfidence
 */
class StartShotDetectionFilter extends Shape
{
    /**
     * @param array{MinSegmentConfidence?: float} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
