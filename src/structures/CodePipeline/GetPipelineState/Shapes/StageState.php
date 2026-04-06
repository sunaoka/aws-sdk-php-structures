<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetPipelineState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $stageName
 * @property StageExecution|null $inboundExecution
 * @property TransitionState|null $inboundTransitionState
 * @property list<ActionState>|null $actionStates
 * @property StageExecution|null $latestExecution
 */
class StageState extends Shape
{
    /**
     * @param array{
     *     stageName?: string|null,
     *     inboundExecution?: StageExecution|null,
     *     inboundTransitionState?: TransitionState|null,
     *     actionStates?: list<ActionState>|null,
     *     latestExecution?: StageExecution|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
