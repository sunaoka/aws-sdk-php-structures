<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateHyperParameterTuningJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HyperParameterTuningJobName
 * @property Shapes\HyperParameterTuningJobConfig $HyperParameterTuningJobConfig
 * @property Shapes\HyperParameterTrainingJobDefinition|null $TrainingJobDefinition
 * @property list<Shapes\HyperParameterTrainingJobDefinition>|null $TrainingJobDefinitions
 * @property Shapes\HyperParameterTuningJobWarmStartConfig|null $WarmStartConfig
 * @property list<Shapes\Tag>|null $Tags
 * @property Shapes\Autotune|null $Autotune
 */
class CreateHyperParameterTuningJobRequest extends Request
{
    /**
     * @param array{
     *     HyperParameterTuningJobName: string,
     *     HyperParameterTuningJobConfig: Shapes\HyperParameterTuningJobConfig,
     *     TrainingJobDefinition?: Shapes\HyperParameterTrainingJobDefinition|null,
     *     TrainingJobDefinitions?: list<Shapes\HyperParameterTrainingJobDefinition>|null,
     *     WarmStartConfig?: Shapes\HyperParameterTuningJobWarmStartConfig|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     Autotune?: Shapes\Autotune|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
