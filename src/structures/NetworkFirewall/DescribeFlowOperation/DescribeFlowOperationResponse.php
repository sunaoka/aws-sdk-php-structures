<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeFlowOperation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $FirewallArn
 * @property string|null $AvailabilityZone
 * @property string|null $FlowOperationId
 * @property 'FLOW_FLUSH'|'FLOW_CAPTURE'|null $FlowOperationType
 * @property 'COMPLETED'|'IN_PROGRESS'|'FAILED'|'COMPLETED_WITH_ERRORS'|null $FlowOperationStatus
 * @property string|null $StatusMessage
 * @property \Aws\Api\DateTimeResult|null $FlowRequestTimestamp
 * @property Shapes\FlowOperation|null $FlowOperation
 */
class DescribeFlowOperationResponse extends Response
{
}
