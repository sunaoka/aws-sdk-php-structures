<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeFlowOperation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FirewallArn
 * @property string|null $AvailabilityZone
 * @property string $FlowOperationId
 */
class DescribeFlowOperationRequest extends Request
{
    /**
     * @param array{
     *     FirewallArn: string,
     *     AvailabilityZone?: string|null,
     *     FlowOperationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
