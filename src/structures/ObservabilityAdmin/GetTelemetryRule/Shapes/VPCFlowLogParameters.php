<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\GetTelemetryRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LogFormat
 * @property string|null $TrafficType
 * @property int|null $MaxAggregationInterval
 */
class VPCFlowLogParameters extends Shape
{
    /**
     * @param array{
     *     LogFormat?: string|null,
     *     TrafficType?: string|null,
     *     MaxAggregationInterval?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
