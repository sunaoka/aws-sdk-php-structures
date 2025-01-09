<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateTrainingJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrainingJobName
 * @property array<string, string> $HyperParameters
 * @property Shapes\AlgorithmSpecification $AlgorithmSpecification
 * @property string $RoleArn
 * @property list<Shapes\Channel> $InputDataConfig
 * @property Shapes\OutputDataConfig $OutputDataConfig
 * @property Shapes\ResourceConfig $ResourceConfig
 * @property Shapes\VpcConfig $VpcConfig
 * @property Shapes\StoppingCondition $StoppingCondition
 * @property list<Shapes\Tag> $Tags
 * @property bool $EnableNetworkIsolation
 * @property bool $EnableInterContainerTrafficEncryption
 * @property bool $EnableManagedSpotTraining
 * @property Shapes\CheckpointConfig $CheckpointConfig
 * @property Shapes\DebugHookConfig $DebugHookConfig
 * @property list<Shapes\DebugRuleConfiguration> $DebugRuleConfigurations
 * @property Shapes\TensorBoardOutputConfig $TensorBoardOutputConfig
 * @property Shapes\ExperimentConfig $ExperimentConfig
 * @property Shapes\ProfilerConfig $ProfilerConfig
 * @property list<Shapes\ProfilerRuleConfiguration> $ProfilerRuleConfigurations
 * @property array<string, string> $Environment
 * @property Shapes\RetryStrategy $RetryStrategy
 * @property Shapes\RemoteDebugConfig $RemoteDebugConfig
 * @property Shapes\InfraCheckConfig $InfraCheckConfig
 * @property Shapes\SessionChainingConfig $SessionChainingConfig
 */
class CreateTrainingJobRequest extends Request
{
    /**
     * @param array{
     *     TrainingJobName: string,
     *     HyperParameters?: array<string, string>,
     *     AlgorithmSpecification: Shapes\AlgorithmSpecification,
     *     RoleArn: string,
     *     InputDataConfig?: list<Shapes\Channel>,
     *     OutputDataConfig: Shapes\OutputDataConfig,
     *     ResourceConfig: Shapes\ResourceConfig,
     *     VpcConfig?: Shapes\VpcConfig,
     *     StoppingCondition: Shapes\StoppingCondition,
     *     Tags?: list<Shapes\Tag>,
     *     EnableNetworkIsolation?: bool,
     *     EnableInterContainerTrafficEncryption?: bool,
     *     EnableManagedSpotTraining?: bool,
     *     CheckpointConfig?: Shapes\CheckpointConfig,
     *     DebugHookConfig?: Shapes\DebugHookConfig,
     *     DebugRuleConfigurations?: list<Shapes\DebugRuleConfiguration>,
     *     TensorBoardOutputConfig?: Shapes\TensorBoardOutputConfig,
     *     ExperimentConfig?: Shapes\ExperimentConfig,
     *     ProfilerConfig?: Shapes\ProfilerConfig,
     *     ProfilerRuleConfigurations?: list<Shapes\ProfilerRuleConfiguration>,
     *     Environment?: array<string, string>,
     *     RetryStrategy?: Shapes\RetryStrategy,
     *     RemoteDebugConfig?: Shapes\RemoteDebugConfig,
     *     InfraCheckConfig?: Shapes\InfraCheckConfig,
     *     SessionChainingConfig?: Shapes\SessionChainingConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
