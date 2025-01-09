<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateHyperParameterTuningJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HyperParameterTuningJobName
 * @property Shapes\HyperParameterTuningJobConfig $HyperParameterTuningJobConfig
 * @property Shapes\HyperParameterTrainingJobDefinition $TrainingJobDefinition
 * @property list<Shapes\HyperParameterTrainingJobDefinition> $TrainingJobDefinitions
 * @property Shapes\HyperParameterTuningJobWarmStartConfig $WarmStartConfig
 * @property list<Shapes\Tag> $Tags
 * @property Shapes\Autotune $Autotune
 */
class CreateHyperParameterTuningJobRequest extends Request
{
    /**
     * @param array{
     *     HyperParameterTuningJobName: string,
     *     HyperParameterTuningJobConfig: Shapes\HyperParameterTuningJobConfig,
     *     TrainingJobDefinition?: Shapes\HyperParameterTrainingJobDefinition,
     *     TrainingJobDefinitions?: list<Shapes\HyperParameterTrainingJobDefinition>,
     *     WarmStartConfig?: Shapes\HyperParameterTuningJobWarmStartConfig,
     *     Tags?: list<Shapes\Tag>,
     *     Autotune?: Shapes\Autotune
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
