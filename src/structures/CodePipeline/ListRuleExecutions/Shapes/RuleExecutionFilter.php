<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListRuleExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $pipelineExecutionId
 * @property LatestInPipelineExecutionFilter|null $latestInPipelineExecution
 */
class RuleExecutionFilter extends Shape
{
    /**
     * @param array{
     *     pipelineExecutionId?: string|null,
     *     latestInPipelineExecution?: LatestInPipelineExecutionFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
