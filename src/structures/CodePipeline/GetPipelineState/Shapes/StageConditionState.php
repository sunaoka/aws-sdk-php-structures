<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetPipelineState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StageConditionsExecution|null $latestExecution
 * @property list<ConditionState>|null $conditionStates
 */
class StageConditionState extends Shape
{
    /**
     * @param array{
     *     latestExecution?: StageConditionsExecution|null,
     *     conditionStates?: list<ConditionState>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
