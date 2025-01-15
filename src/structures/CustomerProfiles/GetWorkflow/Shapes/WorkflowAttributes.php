<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AppflowIntegrationWorkflowAttributes|null $AppflowIntegration
 */
class WorkflowAttributes extends Shape
{
    /**
     * @param array{AppflowIntegration?: AppflowIntegrationWorkflowAttributes|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
