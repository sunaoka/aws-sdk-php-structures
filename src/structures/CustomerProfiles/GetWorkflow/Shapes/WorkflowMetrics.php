<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AppflowIntegrationWorkflowMetrics $AppflowIntegration
 */
class WorkflowMetrics extends Shape
{
    /**
     * @param array{AppflowIntegration?: AppflowIntegrationWorkflowMetrics} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
