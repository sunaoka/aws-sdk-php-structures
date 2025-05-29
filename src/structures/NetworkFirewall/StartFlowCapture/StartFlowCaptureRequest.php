<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\StartFlowCapture;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FirewallArn
 * @property string|null $AvailabilityZone
 * @property string|null $VpcEndpointAssociationArn
 * @property string|null $VpcEndpointId
 * @property int|null $MinimumFlowAgeInSeconds
 * @property list<Shapes\FlowFilter> $FlowFilters
 */
class StartFlowCaptureRequest extends Request
{
    /**
     * @param array{
     *     FirewallArn: string,
     *     AvailabilityZone?: string|null,
     *     VpcEndpointAssociationArn?: string|null,
     *     VpcEndpointId?: string|null,
     *     MinimumFlowAgeInSeconds?: int|null,
     *     FlowFilters: list<Shapes\FlowFilter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
