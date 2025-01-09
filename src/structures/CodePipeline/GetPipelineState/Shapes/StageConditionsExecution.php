<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetPipelineState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'InProgress'|'Failed'|'Errored'|'Succeeded'|'Cancelled'|'Abandoned'|'Overridden' $status
 * @property string $summary
 */
class StageConditionsExecution extends Shape
{
    /**
     * @param array{
     *     status?: 'InProgress'|'Failed'|'Errored'|'Succeeded'|'Cancelled'|'Abandoned'|'Overridden',
     *     summary?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
