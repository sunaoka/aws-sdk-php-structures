<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AppflowIntegrationWorkflowMetrics|null $AppflowIntegration
 */
class WorkflowMetrics extends Shape
{
    /**
     * @param array{AppflowIntegration?: AppflowIntegrationWorkflowMetrics|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
