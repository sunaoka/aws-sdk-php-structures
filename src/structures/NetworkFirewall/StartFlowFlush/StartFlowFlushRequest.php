<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\StartFlowFlush;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FirewallArn
 * @property string|null $AvailabilityZone
 * @property int|null $MinimumFlowAgeInSeconds
 * @property list<Shapes\FlowFilter> $FlowFilters
 */
class StartFlowFlushRequest extends Request
{
    /**
     * @param array{
     *     FirewallArn: string,
     *     AvailabilityZone?: string|null,
     *     MinimumFlowAgeInSeconds?: int|null,
     *     FlowFilters: list<Shapes\FlowFilter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
