<?php

namespace Sunaoka\Aws\Structures\Athena\ListExecutors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ExecutorId
 * @property 'COORDINATOR'|'GATEWAY'|'WORKER'|null $ExecutorType
 * @property int|null $StartDateTime
 * @property int|null $TerminationDateTime
 * @property 'CREATING'|'CREATED'|'REGISTERED'|'TERMINATING'|'TERMINATED'|'FAILED'|null $ExecutorState
 * @property int|null $ExecutorSize
 */
class ExecutorsSummary extends Shape
{
    /**
     * @param array{
     *     ExecutorId: string,
     *     ExecutorType?: 'COORDINATOR'|'GATEWAY'|'WORKER'|null,
     *     StartDateTime?: int|null,
     *     TerminationDateTime?: int|null,
     *     ExecutorState?: 'CREATING'|'CREATED'|'REGISTERED'|'TERMINATING'|'TERMINATED'|'FAILED'|null,
     *     ExecutorSize?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
