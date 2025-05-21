<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\ListFlowOperations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FirewallArn
 * @property string|null $AvailabilityZone
 * @property 'FLOW_FLUSH'|'FLOW_CAPTURE'|null $FlowOperationType
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListFlowOperationsRequest extends Request
{
    /**
     * @param array{
     *     FirewallArn: string,
     *     AvailabilityZone?: string|null,
     *     FlowOperationType?: 'FLOW_FLUSH'|'FLOW_CAPTURE'|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
