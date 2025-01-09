<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $RecordsProcessed
 * @property int $StepsCompleted
 * @property int $TotalSteps
 */
class AppflowIntegrationWorkflowMetrics extends Shape
{
    /**
     * @param array{
     *     RecordsProcessed: int,
     *     StepsCompleted: int,
     *     TotalSteps: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
