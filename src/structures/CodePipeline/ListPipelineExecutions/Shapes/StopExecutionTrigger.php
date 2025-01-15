<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListPipelineExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $reason
 */
class StopExecutionTrigger extends Shape
{
    /**
     * @param array{reason?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
