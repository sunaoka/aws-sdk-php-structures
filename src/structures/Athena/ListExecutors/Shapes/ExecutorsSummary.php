<?php

namespace Sunaoka\Aws\Structures\Athena\ListExecutors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ExecutorId
 * @property 'COORDINATOR'|'GATEWAY'|'WORKER' $ExecutorType
 * @property int $StartDateTime
 * @property int $TerminationDateTime
 * @property 'CREATING'|'CREATED'|'REGISTERED'|'TERMINATING'|'TERMINATED'|'FAILED' $ExecutorState
 * @property int $ExecutorSize
 */
class ExecutorsSummary extends Shape
{
    /**
     * @param array{
     *     ExecutorId: string,
     *     ExecutorType?: 'COORDINATOR'|'GATEWAY'|'WORKER',
     *     StartDateTime?: int,
     *     TerminationDateTime?: int,
     *     ExecutorState?: 'CREATING'|'CREATED'|'REGISTERED'|'TERMINATING'|'TERMINATED'|'FAILED',
     *     ExecutorSize?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
