<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetWorkflow;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $WorkflowId
 * @property 'APPFLOW_INTEGRATION' $WorkflowType
 * @property 'NOT_STARTED'|'IN_PROGRESS'|'COMPLETE'|'FAILED'|'SPLIT'|'RETRY'|'CANCELLED' $Status
 * @property string $ErrorDescription
 * @property \Aws\Api\DateTimeResult $StartDate
 * @property \Aws\Api\DateTimeResult $LastUpdatedAt
 * @property Shapes\WorkflowAttributes $Attributes
 * @property Shapes\WorkflowMetrics $Metrics
 */
class GetWorkflowResponse extends Response
{
}
