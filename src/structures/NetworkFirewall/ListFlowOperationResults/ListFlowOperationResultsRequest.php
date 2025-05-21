<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\ListFlowOperationResults;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FirewallArn
 * @property string $FlowOperationId
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property string|null $AvailabilityZone
 */
class ListFlowOperationResultsRequest extends Request
{
    /**
     * @param array{
     *     FirewallArn: string,
     *     FlowOperationId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     AvailabilityZone?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
