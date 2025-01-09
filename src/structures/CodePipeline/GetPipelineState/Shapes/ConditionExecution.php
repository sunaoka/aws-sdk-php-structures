<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetPipelineState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'InProgress'|'Failed'|'Errored'|'Succeeded'|'Cancelled'|'Abandoned'|'Overridden' $status
 * @property string $summary
 * @property \Aws\Api\DateTimeResult $lastStatusChange
 */
class ConditionExecution extends Shape
{
    /**
     * @param array{
     *     status?: 'InProgress'|'Failed'|'Errored'|'Succeeded'|'Cancelled'|'Abandoned'|'Overridden',
     *     summary?: string,
     *     lastStatusChange?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
