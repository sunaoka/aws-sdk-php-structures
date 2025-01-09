<?php

namespace Sunaoka\Aws\Structures\Pinpoint\CreateSegment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, AttributeDimension> $Attributes
 * @property SegmentBehaviors $Behavior
 * @property SegmentDemographics $Demographic
 * @property SegmentLocation $Location
 * @property array<string, MetricDimension> $Metrics
 * @property array<string, AttributeDimension> $UserAttributes
 */
class SegmentDimensions extends Shape
{
    /**
     * @param array{
     *     Attributes?: array<string, AttributeDimension>,
     *     Behavior?: SegmentBehaviors,
     *     Demographic?: SegmentDemographics,
     *     Location?: SegmentLocation,
     *     Metrics?: array<string, MetricDimension>,
     *     UserAttributes?: array<string, AttributeDimension>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
