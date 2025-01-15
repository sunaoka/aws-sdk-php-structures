<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetCampaignVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, AttributeDimension>|null $Attributes
 * @property SetDimension|null $EventType
 * @property array<string, MetricDimension>|null $Metrics
 */
class EventDimensions extends Shape
{
    /**
     * @param array{
     *     Attributes?: array<string, AttributeDimension>|null,
     *     EventType?: SetDimension|null,
     *     Metrics?: array<string, MetricDimension>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
