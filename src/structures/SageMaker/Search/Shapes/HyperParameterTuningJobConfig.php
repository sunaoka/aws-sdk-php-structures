<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Bayesian'|'Random'|'Hyperband'|'Grid' $Strategy
 * @property HyperParameterTuningJobStrategyConfig|null $StrategyConfig
 * @property HyperParameterTuningJobObjective|null $HyperParameterTuningJobObjective
 * @property ResourceLimits $ResourceLimits
 * @property ParameterRanges|null $ParameterRanges
 * @property 'Off'|'Auto'|null $TrainingJobEarlyStoppingType
 * @property TuningJobCompletionCriteria|null $TuningJobCompletionCriteria
 * @property int<0, max>|null $RandomSeed
 */
class HyperParameterTuningJobConfig extends Shape
{
    /**
     * @param array{
     *     Strategy: 'Bayesian'|'Random'|'Hyperband'|'Grid',
     *     StrategyConfig?: HyperParameterTuningJobStrategyConfig|null,
     *     HyperParameterTuningJobObjective?: HyperParameterTuningJobObjective|null,
     *     ResourceLimits: ResourceLimits,
     *     ParameterRanges?: ParameterRanges|null,
     *     TrainingJobEarlyStoppingType?: 'Off'|'Auto'|null,
     *     TuningJobCompletionCriteria?: TuningJobCompletionCriteria|null,
     *     RandomSeed?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
