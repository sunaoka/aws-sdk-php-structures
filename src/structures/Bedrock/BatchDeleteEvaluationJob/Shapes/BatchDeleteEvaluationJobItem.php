<?php

namespace Sunaoka\Aws\Structures\Bedrock\BatchDeleteEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobIdentifier
 * @property 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped'|'Deleting' $jobStatus
 */
class BatchDeleteEvaluationJobItem extends Shape
{
    /**
     * @param array{
     *     jobIdentifier: string,
     *     jobStatus: 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped'|'Deleting'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
