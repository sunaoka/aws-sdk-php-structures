<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListActionExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $pipelineExecutionId
 * @property LatestInPipelineExecutionFilter $latestInPipelineExecution
 */
class ActionExecutionFilter extends Shape
{
    /**
     * @param array{
     *     pipelineExecutionId?: string,
     *     latestInPipelineExecution?: LatestInPipelineExecutionFilter
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
