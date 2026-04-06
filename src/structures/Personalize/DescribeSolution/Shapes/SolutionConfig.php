<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeSolution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $eventValueThreshold
 * @property HPOConfig|null $hpoConfig
 * @property array<string, string>|null $algorithmHyperParameters
 * @property array<string, string>|null $featureTransformationParameters
 * @property AutoMLConfig|null $autoMLConfig
 * @property OptimizationObjective|null $optimizationObjective
 * @property TrainingDataConfig|null $trainingDataConfig
 * @property AutoTrainingConfig|null $autoTrainingConfig
 */
class SolutionConfig extends Shape
{
    /**
     * @param array{
     *     eventValueThreshold?: string|null,
     *     hpoConfig?: HPOConfig|null,
     *     algorithmHyperParameters?: array<string, string>|null,
     *     featureTransformationParameters?: array<string, string>|null,
     *     autoMLConfig?: AutoMLConfig|null,
     *     optimizationObjective?: OptimizationObjective|null,
     *     trainingDataConfig?: TrainingDataConfig|null,
     *     autoTrainingConfig?: AutoTrainingConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
