<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListPipelineExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SucceededInStageFilter|null $succeededInStage
 */
class PipelineExecutionFilter extends Shape
{
    /**
     * @param array{succeededInStage?: SucceededInStageFilter|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
