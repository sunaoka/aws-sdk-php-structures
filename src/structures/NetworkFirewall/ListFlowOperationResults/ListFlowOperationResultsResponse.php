<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\ListFlowOperationResults;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $FirewallArn
 * @property string|null $AvailabilityZone
 * @property string|null $FlowOperationId
 * @property 'COMPLETED'|'IN_PROGRESS'|'FAILED'|'COMPLETED_WITH_ERRORS'|null $FlowOperationStatus
 * @property string|null $StatusMessage
 * @property \Aws\Api\DateTimeResult|null $FlowRequestTimestamp
 * @property list<Shapes\Flow>|null $Flows
 * @property string|null $NextToken
 */
class ListFlowOperationResultsResponse extends Response
{
}
