<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateHyperParameterTuningJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DefinitionName
 * @property HyperParameterTuningJobObjective|null $TuningObjective
 * @property ParameterRanges|null $HyperParameterRanges
 * @property array<string, string>|null $StaticHyperParameters
 * @property HyperParameterAlgorithmSpecification $AlgorithmSpecification
 * @property string $RoleArn
 * @property list<Channel>|null $InputDataConfig
 * @property VpcConfig|null $VpcConfig
 * @property OutputDataConfig $OutputDataConfig
 * @property ResourceConfig|null $ResourceConfig
 * @property HyperParameterTuningResourceConfig|null $HyperParameterTuningResourceConfig
 * @property StoppingCondition $StoppingCondition
 * @property bool|null $EnableNetworkIsolation
 * @property bool|null $EnableInterContainerTrafficEncryption
 * @property bool|null $EnableManagedSpotTraining
 * @property CheckpointConfig|null $CheckpointConfig
 * @property RetryStrategy|null $RetryStrategy
 * @property array<string, string>|null $Environment
 */
class HyperParameterTrainingJobDefinition extends Shape
{
    /**
     * @param array{
     *     DefinitionName?: string|null,
     *     TuningObjective?: HyperParameterTuningJobObjective|null,
     *     HyperParameterRanges?: ParameterRanges|null,
     *     StaticHyperParameters?: array<string, string>|null,
     *     AlgorithmSpecification: HyperParameterAlgorithmSpecification,
     *     RoleArn: string,
     *     InputDataConfig?: list<Channel>|null,
     *     VpcConfig?: VpcConfig|null,
     *     OutputDataConfig: OutputDataConfig,
     *     ResourceConfig?: ResourceConfig|null,
     *     HyperParameterTuningResourceConfig?: HyperParameterTuningResourceConfig|null,
     *     StoppingCondition: StoppingCondition,
     *     EnableNetworkIsolation?: bool|null,
     *     EnableInterContainerTrafficEncryption?: bool|null,
     *     EnableManagedSpotTraining?: bool|null,
     *     CheckpointConfig?: CheckpointConfig|null,
     *     RetryStrategy?: RetryStrategy|null,
     *     Environment?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
