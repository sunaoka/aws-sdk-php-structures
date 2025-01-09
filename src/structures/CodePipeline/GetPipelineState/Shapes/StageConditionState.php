<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetPipelineState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StageConditionsExecution $latestExecution
 * @property list<ConditionState> $conditionStates
 */
class StageConditionState extends Shape
{
    /**
     * @param array{
     *     latestExecution?: StageConditionsExecution,
     *     conditionStates?: list<ConditionState>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
