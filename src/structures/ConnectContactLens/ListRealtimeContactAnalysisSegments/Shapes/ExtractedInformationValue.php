<?php

namespace Sunaoka\Aws\Structures\ConnectContactLens\ListRealtimeContactAnalysisSegments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Content
 * @property list<PointOfInterest> $PointsOfInterest
 */
class ExtractedInformationValue extends Shape
{
    /**
     * @param array{
     *     Content: string,
     *     PointsOfInterest: list<PointOfInterest>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
