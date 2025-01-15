<?php

namespace Sunaoka\Aws\Structures\Rekognition\StartTextDetection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DetectionFilter|null $WordFilter
 * @property list<RegionOfInterest>|null $RegionsOfInterest
 */
class StartTextDetectionFilters extends Shape
{
    /**
     * @param array{
     *     WordFilter?: DetectionFilter|null,
     *     RegionsOfInterest?: list<RegionOfInterest>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
