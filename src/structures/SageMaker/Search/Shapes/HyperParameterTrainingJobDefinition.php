<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DefinitionName
 * @property HyperParameterTuningJobObjective $TuningObjective
 * @property ParameterRanges $HyperParameterRanges
 * @property array<string, string> $StaticHyperParameters
 * @property HyperParameterAlgorithmSpecification $AlgorithmSpecification
 * @property string $RoleArn
 * @property list<Channel> $InputDataConfig
 * @property VpcConfig $VpcConfig
 * @property OutputDataConfig $OutputDataConfig
 * @property ResourceConfig $ResourceConfig
 * @property HyperParameterTuningResourceConfig $HyperParameterTuningResourceConfig
 * @property StoppingCondition $StoppingCondition
 * @property bool $EnableNetworkIsolation
 * @property bool $EnableInterContainerTrafficEncryption
 * @property bool $EnableManagedSpotTraining
 * @property CheckpointConfig $CheckpointConfig
 * @property RetryStrategy $RetryStrategy
 * @property array<string, string> $Environment
 */
class HyperParameterTrainingJobDefinition extends Shape
{
    /**
     * @param array{
     *     DefinitionName?: string,
     *     TuningObjective?: HyperParameterTuningJobObjective,
     *     HyperParameterRanges?: ParameterRanges,
     *     StaticHyperParameters?: array<string, string>,
     *     AlgorithmSpecification: HyperParameterAlgorithmSpecification,
     *     RoleArn: string,
     *     InputDataConfig?: list<Channel>,
     *     VpcConfig?: VpcConfig,
     *     OutputDataConfig: OutputDataConfig,
     *     ResourceConfig?: ResourceConfig,
     *     HyperParameterTuningResourceConfig?: HyperParameterTuningResourceConfig,
     *     StoppingCondition: StoppingCondition,
     *     EnableNetworkIsolation?: bool,
     *     EnableInterContainerTrafficEncryption?: bool,
     *     EnableManagedSpotTraining?: bool,
     *     CheckpointConfig?: CheckpointConfig,
     *     RetryStrategy?: RetryStrategy,
     *     Environment?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
