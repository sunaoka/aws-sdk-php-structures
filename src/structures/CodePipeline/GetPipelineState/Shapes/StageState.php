<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetPipelineState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $stageName
 * @property StageExecution $inboundExecution
 * @property list<StageExecution> $inboundExecutions
 * @property TransitionState $inboundTransitionState
 * @property list<ActionState> $actionStates
 * @property StageExecution $latestExecution
 * @property StageConditionState $beforeEntryConditionState
 * @property StageConditionState $onSuccessConditionState
 * @property StageConditionState $onFailureConditionState
 * @property RetryStageMetadata $retryStageMetadata
 */
class StageState extends Shape
{
    /**
     * @param array{
     *     stageName?: string,
     *     inboundExecution?: StageExecution,
     *     inboundExecutions?: list<StageExecution>,
     *     inboundTransitionState?: TransitionState,
     *     actionStates?: list<ActionState>,
     *     latestExecution?: StageExecution,
     *     beforeEntryConditionState?: StageConditionState,
     *     onSuccessConditionState?: StageConditionState,
     *     onFailureConditionState?: StageConditionState,
     *     retryStageMetadata?: RetryStageMetadata
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
