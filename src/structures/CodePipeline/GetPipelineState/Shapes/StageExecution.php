<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetPipelineState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $pipelineExecutionId
 * @property 'Cancelled'|'InProgress'|'Failed'|'Stopped'|'Stopping'|'Succeeded' $status
 * @property 'STANDARD'|'ROLLBACK'|null $type
 */
class StageExecution extends Shape
{
    /**
     * @param array{
     *     pipelineExecutionId: string,
     *     status: 'Cancelled'|'InProgress'|'Failed'|'Stopped'|'Stopping'|'Succeeded',
     *     type?: 'STANDARD'|'ROLLBACK'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
