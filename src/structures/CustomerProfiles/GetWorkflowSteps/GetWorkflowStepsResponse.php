<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetWorkflowSteps;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $WorkflowId
 * @property 'APPFLOW_INTEGRATION'|null $WorkflowType
 * @property list<Shapes\WorkflowStepItem>|null $Items
 * @property string|null $NextToken
 */
class GetWorkflowStepsResponse extends Response
{
}
