<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListPipelineExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SucceededInStageFilter $succeededInStage
 */
class PipelineExecutionFilter extends Shape
{
    /**
     * @param array{succeededInStage?: SucceededInStageFilter} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
