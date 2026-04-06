<?php

namespace Sunaoka\Aws\Structures\DataSync\ListTaskExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TaskExecutionArn
 * @property 'QUEUED'|'CANCELLING'|'LAUNCHING'|'PREPARING'|'TRANSFERRING'|'VERIFYING'|'SUCCESS'|'ERROR'|null $Status
 * @property 'BASIC'|'ENHANCED'|null $TaskMode
 */
class TaskExecutionListEntry extends Shape
{
    /**
     * @param array{
     *     TaskExecutionArn?: string|null,
     *     Status?: 'QUEUED'|'CANCELLING'|'LAUNCHING'|'PREPARING'|'TRANSFERRING'|'VERIFYING'|'SUCCESS'|'ERROR'|null,
     *     TaskMode?: 'BASIC'|'ENHANCED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
