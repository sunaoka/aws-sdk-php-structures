<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetPipelineState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $stageName
 * @property StageExecution|null $inboundExecution
 * @property list<StageExecution>|null $inboundExecutions
 * @property TransitionState|null $inboundTransitionState
 * @property list<ActionState>|null $actionStates
 * @property StageExecution|null $latestExecution
 * @property StageConditionState|null $beforeEntryConditionState
 * @property StageConditionState|null $onSuccessConditionState
 * @property StageConditionState|null $onFailureConditionState
 * @property RetryStageMetadata|null $retryStageMetadata
 */
class StageState extends Shape
{
    /**
     * @param array{
     *     stageName?: string|null,
     *     inboundExecution?: StageExecution|null,
     *     inboundExecutions?: list<StageExecution>|null,
     *     inboundTransitionState?: TransitionState|null,
     *     actionStates?: list<ActionState>|null,
     *     latestExecution?: StageExecution|null,
     *     beforeEntryConditionState?: StageConditionState|null,
     *     onSuccessConditionState?: StageConditionState|null,
     *     onFailureConditionState?: StageConditionState|null,
     *     retryStageMetadata?: RetryStageMetadata|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
