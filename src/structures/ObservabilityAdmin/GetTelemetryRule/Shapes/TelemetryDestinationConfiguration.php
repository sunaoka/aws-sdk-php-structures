<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\GetTelemetryRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'cloud-watch-logs'|null $DestinationType
 * @property string|null $DestinationPattern
 * @property int<1, 3653>|null $RetentionInDays
 * @property VPCFlowLogParameters|null $VPCFlowLogParameters
 */
class TelemetryDestinationConfiguration extends Shape
{
    /**
     * @param array{
     *     DestinationType?: 'cloud-watch-logs'|null,
     *     DestinationPattern?: string|null,
     *     RetentionInDays?: int<1, 3653>|null,
     *     VPCFlowLogParameters?: VPCFlowLogParameters|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
