<?php

namespace Sunaoka\Aws\Structures\Rekognition\StartSegmentDetection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StartTechnicalCueDetectionFilter $TechnicalCueFilter
 * @property StartShotDetectionFilter $ShotFilter
 */
class StartSegmentDetectionFilters extends Shape
{
    /**
     * @param array{
     *     TechnicalCueFilter?: StartTechnicalCueDetectionFilter,
     *     ShotFilter?: StartShotDetectionFilter
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
