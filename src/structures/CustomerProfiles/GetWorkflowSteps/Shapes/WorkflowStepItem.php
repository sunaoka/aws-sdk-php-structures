<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetWorkflowSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AppflowIntegrationWorkflowStep|null $AppflowIntegration
 */
class WorkflowStepItem extends Shape
{
    /**
     * @param array{AppflowIntegration?: AppflowIntegrationWorkflowStep|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
