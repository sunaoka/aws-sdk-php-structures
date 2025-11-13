<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateTrainingJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrainingJobName
 * @property array<string, string>|null $HyperParameters
 * @property Shapes\AlgorithmSpecification|null $AlgorithmSpecification
 * @property string $RoleArn
 * @property list<Shapes\Channel>|null $InputDataConfig
 * @property Shapes\OutputDataConfig $OutputDataConfig
 * @property Shapes\ResourceConfig|null $ResourceConfig
 * @property Shapes\VpcConfig|null $VpcConfig
 * @property Shapes\StoppingCondition|null $StoppingCondition
 * @property list<Shapes\Tag>|null $Tags
 * @property bool|null $EnableNetworkIsolation
 * @property bool|null $EnableInterContainerTrafficEncryption
 * @property bool|null $EnableManagedSpotTraining
 * @property Shapes\CheckpointConfig|null $CheckpointConfig
 * @property Shapes\DebugHookConfig|null $DebugHookConfig
 * @property list<Shapes\DebugRuleConfiguration>|null $DebugRuleConfigurations
 * @property Shapes\TensorBoardOutputConfig|null $TensorBoardOutputConfig
 * @property Shapes\ExperimentConfig|null $ExperimentConfig
 * @property Shapes\ProfilerConfig|null $ProfilerConfig
 * @property list<Shapes\ProfilerRuleConfiguration>|null $ProfilerRuleConfigurations
 * @property array<string, string>|null $Environment
 * @property Shapes\RetryStrategy|null $RetryStrategy
 * @property Shapes\RemoteDebugConfig|null $RemoteDebugConfig
 * @property Shapes\InfraCheckConfig|null $InfraCheckConfig
 * @property Shapes\SessionChainingConfig|null $SessionChainingConfig
 */
class CreateTrainingJobRequest extends Request
{
    /**
     * @param array{
     *     TrainingJobName: string,
     *     HyperParameters?: array<string, string>|null,
     *     AlgorithmSpecification?: Shapes\AlgorithmSpecification|null,
     *     RoleArn: string,
     *     InputDataConfig?: list<Shapes\Channel>|null,
     *     OutputDataConfig: Shapes\OutputDataConfig,
     *     ResourceConfig?: Shapes\ResourceConfig|null,
     *     VpcConfig?: Shapes\VpcConfig|null,
     *     StoppingCondition?: Shapes\StoppingCondition|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     EnableNetworkIsolation?: bool|null,
     *     EnableInterContainerTrafficEncryption?: bool|null,
     *     EnableManagedSpotTraining?: bool|null,
     *     CheckpointConfig?: Shapes\CheckpointConfig|null,
     *     DebugHookConfig?: Shapes\DebugHookConfig|null,
     *     DebugRuleConfigurations?: list<Shapes\DebugRuleConfiguration>|null,
     *     TensorBoardOutputConfig?: Shapes\TensorBoardOutputConfig|null,
     *     ExperimentConfig?: Shapes\ExperimentConfig|null,
     *     ProfilerConfig?: Shapes\ProfilerConfig|null,
     *     ProfilerRuleConfigurations?: list<Shapes\ProfilerRuleConfiguration>|null,
     *     Environment?: array<string, string>|null,
     *     RetryStrategy?: Shapes\RetryStrategy|null,
     *     RemoteDebugConfig?: Shapes\RemoteDebugConfig|null,
     *     InfraCheckConfig?: Shapes\InfraCheckConfig|null,
     *     SessionChainingConfig?: Shapes\SessionChainingConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
