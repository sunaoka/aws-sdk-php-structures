<?php

namespace Sunaoka\Aws\Structures\Bedrock\BatchDeleteAdvancedPromptOptimizationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobIdentifier
 * @property 'InProgress'|'Completed'|'Failed'|'PartiallyCompleted'|'Stopping'|'Stopped'|'Deleting' $jobStatus
 */
class BatchDeleteAdvancedPromptOptimizationJobItem extends Shape
{
    /**
     * @param array{
     *     jobIdentifier: string,
     *     jobStatus: 'InProgress'|'Completed'|'Failed'|'PartiallyCompleted'|'Stopping'|'Stopped'|'Deleting'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
