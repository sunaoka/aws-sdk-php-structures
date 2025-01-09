<?php

namespace Sunaoka\Aws\Structures\ConnectContactLens\ListRealtimeContactAnalysisSegments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PointOfInterest> $PointsOfInterest
 */
class CategoryDetails extends Shape
{
    /**
     * @param array{PointsOfInterest: list<PointOfInterest>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
