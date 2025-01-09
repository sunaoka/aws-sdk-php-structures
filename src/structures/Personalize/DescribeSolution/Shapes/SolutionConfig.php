<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeSolution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $eventValueThreshold
 * @property HPOConfig $hpoConfig
 * @property array<string, string> $algorithmHyperParameters
 * @property array<string, string> $featureTransformationParameters
 * @property AutoMLConfig $autoMLConfig
 * @property OptimizationObjective $optimizationObjective
 * @property TrainingDataConfig $trainingDataConfig
 * @property AutoTrainingConfig $autoTrainingConfig
 */
class SolutionConfig extends Shape
{
    /**
     * @param array{
     *     eventValueThreshold?: string,
     *     hpoConfig?: HPOConfig,
     *     algorithmHyperParameters?: array<string, string>,
     *     featureTransformationParameters?: array<string, string>,
     *     autoMLConfig?: AutoMLConfig,
     *     optimizationObjective?: OptimizationObjective,
     *     trainingDataConfig?: TrainingDataConfig,
     *     autoTrainingConfig?: AutoTrainingConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
