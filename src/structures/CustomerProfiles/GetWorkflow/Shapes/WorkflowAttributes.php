<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AppflowIntegrationWorkflowAttributes $AppflowIntegration
 */
class WorkflowAttributes extends Shape
{
    /**
     * @param array{AppflowIntegration?: AppflowIntegrationWorkflowAttributes} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
