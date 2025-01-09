<?php

namespace Sunaoka\Aws\Structures\Rekognition\StartTextDetection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DetectionFilter $WordFilter
 * @property list<RegionOfInterest> $RegionsOfInterest
 */
class StartTextDetectionFilters extends Shape
{
    /**
     * @param array{
     *     WordFilter?: DetectionFilter,
     *     RegionsOfInterest?: list<RegionOfInterest>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
