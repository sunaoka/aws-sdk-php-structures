<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TrainingJobName
 * @property string $TrainingJobArn
 * @property string $TuningJobArn
 * @property string $LabelingJobArn
 * @property string $AutoMLJobArn
 * @property ModelArtifacts $ModelArtifacts
 * @property 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped' $TrainingJobStatus
 * @property 'Starting'|'LaunchingMLInstances'|'PreparingTrainingStack'|'Downloading'|'DownloadingTrainingImage'|'Training'|'Uploading'|'Stopping'|'Stopped'|'MaxRuntimeExceeded'|'Completed'|'Failed'|'Interrupted'|'MaxWaitTimeExceeded'|'Updating'|'Restarting'|'Pending' $SecondaryStatus
 * @property string $FailureReason
 * @property array<string, string> $HyperParameters
 * @property AlgorithmSpecification $AlgorithmSpecification
 * @property string $RoleArn
 * @property list<Channel> $InputDataConfig
 * @property OutputDataConfig $OutputDataConfig
 * @property ResourceConfig $ResourceConfig
 * @property VpcConfig $VpcConfig
 * @property StoppingCondition $StoppingCondition
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $TrainingStartTime
 * @property \Aws\Api\DateTimeResult $TrainingEndTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property list<SecondaryStatusTransition> $SecondaryStatusTransitions
 * @property list<MetricData> $FinalMetricDataList
 * @property bool $EnableNetworkIsolation
 * @property bool $EnableInterContainerTrafficEncryption
 * @property bool $EnableManagedSpotTraining
 * @property CheckpointConfig $CheckpointConfig
 * @property int<1, max> $TrainingTimeInSeconds
 * @property int<1, max> $BillableTimeInSeconds
 * @property DebugHookConfig $DebugHookConfig
 * @property ExperimentConfig $ExperimentConfig
 * @property list<DebugRuleConfiguration> $DebugRuleConfigurations
 * @property TensorBoardOutputConfig $TensorBoardOutputConfig
 * @property list<DebugRuleEvaluationStatus> $DebugRuleEvaluationStatuses
 * @property ProfilerConfig $ProfilerConfig
 * @property array<string, string> $Environment
 * @property RetryStrategy $RetryStrategy
 * @property list<Tag> $Tags
 */
class TrainingJob extends Shape
{
    /**
     * @param array{
     *     TrainingJobName?: string,
     *     TrainingJobArn?: string,
     *     TuningJobArn?: string,
     *     LabelingJobArn?: string,
     *     AutoMLJobArn?: string,
     *     ModelArtifacts?: ModelArtifacts,
     *     TrainingJobStatus?: 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped',
     *     SecondaryStatus?: 'Starting'|'LaunchingMLInstances'|'PreparingTrainingStack'|'Downloading'|'DownloadingTrainingImage'|'Training'|'Uploading'|'Stopping'|'Stopped'|'MaxRuntimeExceeded'|'Completed'|'Failed'|'Interrupted'|'MaxWaitTimeExceeded'|'Updating'|'Restarting'|'Pending',
     *     FailureReason?: string,
     *     HyperParameters?: array<string, string>,
     *     AlgorithmSpecification?: AlgorithmSpecification,
     *     RoleArn?: string,
     *     InputDataConfig?: list<Channel>,
     *     OutputDataConfig?: OutputDataConfig,
     *     ResourceConfig?: ResourceConfig,
     *     VpcConfig?: VpcConfig,
     *     StoppingCondition?: StoppingCondition,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     TrainingStartTime?: \Aws\Api\DateTimeResult,
     *     TrainingEndTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     SecondaryStatusTransitions?: list<SecondaryStatusTransition>,
     *     FinalMetricDataList?: list<MetricData>,
     *     EnableNetworkIsolation?: bool,
     *     EnableInterContainerTrafficEncryption?: bool,
     *     EnableManagedSpotTraining?: bool,
     *     CheckpointConfig?: CheckpointConfig,
     *     TrainingTimeInSeconds?: int<1, max>,
     *     BillableTimeInSeconds?: int<1, max>,
     *     DebugHookConfig?: DebugHookConfig,
     *     ExperimentConfig?: ExperimentConfig,
     *     DebugRuleConfigurations?: list<DebugRuleConfiguration>,
     *     TensorBoardOutputConfig?: TensorBoardOutputConfig,
     *     DebugRuleEvaluationStatuses?: list<DebugRuleEvaluationStatus>,
     *     ProfilerConfig?: ProfilerConfig,
     *     Environment?: array<string, string>,
     *     RetryStrategy?: RetryStrategy,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
