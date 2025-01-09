<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListPipelineExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $reason
 */
class StopExecutionTrigger extends Shape
{
    /**
     * @param array{reason?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
