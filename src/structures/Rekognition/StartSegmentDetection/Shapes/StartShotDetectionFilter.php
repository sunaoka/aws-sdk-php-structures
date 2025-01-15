<?php

namespace Sunaoka\Aws\Structures\Rekognition\StartSegmentDetection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float|null $MinSegmentConfidence
 */
class StartShotDetectionFilter extends Shape
{
    /**
     * @param array{MinSegmentConfidence?: float|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
