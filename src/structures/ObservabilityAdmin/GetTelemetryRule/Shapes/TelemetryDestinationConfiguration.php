<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\GetTelemetryRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'cloud-watch-logs'|null $DestinationType
 * @property string|null $DestinationPattern
 * @property int<1, 3653>|null $RetentionInDays
 * @property VPCFlowLogParameters|null $VPCFlowLogParameters
 * @property CloudtrailParameters|null $CloudtrailParameters
 * @property ELBLoadBalancerLoggingParameters|null $ELBLoadBalancerLoggingParameters
 * @property WAFLoggingParameters|null $WAFLoggingParameters
 * @property LogDeliveryParameters|null $LogDeliveryParameters
 */
class TelemetryDestinationConfiguration extends Shape
{
    /**
     * @param array{
     *     DestinationType?: 'cloud-watch-logs'|null,
     *     DestinationPattern?: string|null,
     *     RetentionInDays?: int<1, 3653>|null,
     *     VPCFlowLogParameters?: VPCFlowLogParameters|null,
     *     CloudtrailParameters?: CloudtrailParameters|null,
     *     ELBLoadBalancerLoggingParameters?: ELBLoadBalancerLoggingParameters|null,
     *     WAFLoggingParameters?: WAFLoggingParameters|null,
     *     LogDeliveryParameters?: LogDeliveryParameters|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
