<?php

namespace Sunaoka\Aws\Structures\Rekognition\StartSegmentDetection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StartTechnicalCueDetectionFilter|null $TechnicalCueFilter
 * @property StartShotDetectionFilter|null $ShotFilter
 */
class StartSegmentDetectionFilters extends Shape
{
    /**
     * @param array{
     *     TechnicalCueFilter?: StartTechnicalCueDetectionFilter|null,
     *     ShotFilter?: StartShotDetectionFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
