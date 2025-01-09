<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetWorkflowSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AppflowIntegrationWorkflowStep $AppflowIntegration
 */
class WorkflowStepItem extends Shape
{
    /**
     * @param array{AppflowIntegration?: AppflowIntegrationWorkflowStep} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
