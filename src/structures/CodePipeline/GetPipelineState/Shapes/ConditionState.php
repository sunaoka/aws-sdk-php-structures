<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetPipelineState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConditionExecution $latestExecution
 * @property list<RuleState> $ruleStates
 */
class ConditionState extends Shape
{
    /**
     * @param array{
     *     latestExecution?: ConditionExecution,
     *     ruleStates?: list<RuleState>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
