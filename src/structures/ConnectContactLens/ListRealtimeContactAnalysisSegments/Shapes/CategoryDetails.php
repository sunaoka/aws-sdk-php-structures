<?php

namespace Sunaoka\Aws\Structures\ConnectContactLens\ListRealtimeContactAnalysisSegments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PointOfInterest> $PointsOfInterest
 * @property string|null $RuleId
 */
class CategoryDetails extends Shape
{
    /**
     * @param array{
     *     PointsOfInterest: list<PointOfInterest>,
     *     RuleId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
