<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListRuleExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $pipelineExecutionId
 * @property LatestInPipelineExecutionFilter $latestInPipelineExecution
 */
class RuleExecutionFilter extends Shape
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
