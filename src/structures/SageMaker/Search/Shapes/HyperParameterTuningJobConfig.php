<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Bayesian'|'Random'|'Hyperband'|'Grid' $Strategy
 * @property HyperParameterTuningJobStrategyConfig $StrategyConfig
 * @property HyperParameterTuningJobObjective $HyperParameterTuningJobObjective
 * @property ResourceLimits $ResourceLimits
 * @property ParameterRanges $ParameterRanges
 * @property 'Off'|'Auto' $TrainingJobEarlyStoppingType
 * @property TuningJobCompletionCriteria $TuningJobCompletionCriteria
 * @property int<0, max> $RandomSeed
 */
class HyperParameterTuningJobConfig extends Shape
{
    /**
     * @param array{
     *     Strategy: 'Bayesian'|'Random'|'Hyperband'|'Grid',
     *     StrategyConfig?: HyperParameterTuningJobStrategyConfig,
     *     HyperParameterTuningJobObjective?: HyperParameterTuningJobObjective,
     *     ResourceLimits: ResourceLimits,
     *     ParameterRanges?: ParameterRanges,
     *     TrainingJobEarlyStoppingType?: 'Off'|'Auto',
     *     TuningJobCompletionCriteria?: TuningJobCompletionCriteria,
     *     RandomSeed?: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
