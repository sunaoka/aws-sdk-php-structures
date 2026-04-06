<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListActionExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $pipelineExecutionId
 */
class ActionExecutionFilter extends Shape
{
    /**
     * @param array{pipelineExecutionId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
