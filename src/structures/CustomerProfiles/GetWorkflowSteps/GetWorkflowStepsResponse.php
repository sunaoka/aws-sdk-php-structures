<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetWorkflowSteps;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $WorkflowId
 * @property 'APPFLOW_INTEGRATION' $WorkflowType
 * @property list<Shapes\WorkflowStepItem> $Items
 * @property string $NextToken
 */
class GetWorkflowStepsResponse extends Response
{
}
