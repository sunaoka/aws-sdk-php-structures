<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateSegment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, AttributeDimension>|null $Attributes
 * @property SegmentBehaviors|null $Behavior
 * @property SegmentDemographics|null $Demographic
 * @property SegmentLocation|null $Location
 * @property array<string, MetricDimension>|null $Metrics
 * @property array<string, AttributeDimension>|null $UserAttributes
 */
class SegmentDimensions extends Shape
{
    /**
     * @param array{
     *     Attributes?: array<string, AttributeDimension>|null,
     *     Behavior?: SegmentBehaviors|null,
     *     Demographic?: SegmentDemographics|null,
     *     Location?: SegmentLocation|null,
     *     Metrics?: array<string, MetricDimension>|null,
     *     UserAttributes?: array<string, AttributeDimension>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
