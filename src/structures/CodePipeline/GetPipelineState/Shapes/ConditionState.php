<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetPipelineState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConditionExecution|null $latestExecution
 * @property list<RuleState>|null $ruleStates
 */
class ConditionState extends Shape
{
    /**
     * @param array{
     *     latestExecution?: ConditionExecution|null,
     *     ruleStates?: list<RuleState>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
