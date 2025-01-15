<?php

namespace Sunaoka\Aws\Structures\Rekognition\StartSegmentDetection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float|null $MinSegmentConfidence
 * @property BlackFrame|null $BlackFrame
 */
class StartTechnicalCueDetectionFilter extends Shape
{
    /**
     * @param array{
     *     MinSegmentConfidence?: float|null,
     *     BlackFrame?: BlackFrame|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
