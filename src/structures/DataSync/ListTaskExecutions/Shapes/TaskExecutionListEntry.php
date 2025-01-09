<?php

namespace Sunaoka\Aws\Structures\DataSync\ListTaskExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TaskExecutionArn
 * @property 'QUEUED'|'CANCELLING'|'LAUNCHING'|'PREPARING'|'TRANSFERRING'|'VERIFYING'|'SUCCESS'|'ERROR' $Status
 * @property 'BASIC'|'ENHANCED' $TaskMode
 */
class TaskExecutionListEntry extends Shape
{
    /**
     * @param array{
     *     TaskExecutionArn?: string,
     *     Status?: 'QUEUED'|'CANCELLING'|'LAUNCHING'|'PREPARING'|'TRANSFERRING'|'VERIFYING'|'SUCCESS'|'ERROR',
     *     TaskMode?: 'BASIC'|'ENHANCED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
