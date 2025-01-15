<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetWorkflow;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $WorkflowId
 * @property 'APPFLOW_INTEGRATION'|null $WorkflowType
 * @property 'NOT_STARTED'|'IN_PROGRESS'|'COMPLETE'|'FAILED'|'SPLIT'|'RETRY'|'CANCELLED'|null $Status
 * @property string|null $ErrorDescription
 * @property \Aws\Api\DateTimeResult|null $StartDate
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property Shapes\WorkflowAttributes|null $Attributes
 * @property Shapes\WorkflowMetrics|null $Metrics
 */
class GetWorkflowResponse extends Response
{
}
