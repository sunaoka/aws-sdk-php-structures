<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, AttributeDimension> $Attributes
 * @property SetDimension $EventType
 * @property array<string, MetricDimension> $Metrics
 */
class EventDimensions extends Shape
{
    /**
     * @param array{
     *     Attributes?: array<string, AttributeDimension>,
     *     EventType?: SetDimension,
     *     Metrics?: array<string, MetricDimension>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
