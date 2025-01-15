<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TrainingJobName
 * @property string|null $TrainingJobArn
 * @property string|null $TuningJobArn
 * @property string|null $LabelingJobArn
 * @property string|null $AutoMLJobArn
 * @property ModelArtifacts|null $ModelArtifacts
 * @property 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped'|null $TrainingJobStatus
 * @property 'Starting'|'LaunchingMLInstances'|'PreparingTrainingStack'|'Downloading'|'DownloadingTrainingImage'|'Training'|'Uploading'|'Stopping'|'Stopped'|'MaxRuntimeExceeded'|'Completed'|'Failed'|'Interrupted'|'MaxWaitTimeExceeded'|'Updating'|'Restarting'|'Pending'|null $SecondaryStatus
 * @property string|null $FailureReason
 * @property array<string, string>|null $HyperParameters
 * @property AlgorithmSpecification|null $AlgorithmSpecification
 * @property string|null $RoleArn
 * @property list<Channel>|null $InputDataConfig
 * @property OutputDataConfig|null $OutputDataConfig
 * @property ResourceConfig|null $ResourceConfig
 * @property VpcConfig|null $VpcConfig
 * @property StoppingCondition|null $StoppingCondition
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $TrainingStartTime
 * @property \Aws\Api\DateTimeResult|null $TrainingEndTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property list<SecondaryStatusTransition>|null $SecondaryStatusTransitions
 * @property list<MetricData>|null $FinalMetricDataList
 * @property bool|null $EnableNetworkIsolation
 * @property bool|null $EnableInterContainerTrafficEncryption
 * @property bool|null $EnableManagedSpotTraining
 * @property CheckpointConfig|null $CheckpointConfig
 * @property int<1, max>|null $TrainingTimeInSeconds
 * @property int<1, max>|null $BillableTimeInSeconds
 * @property DebugHookConfig|null $DebugHookConfig
 * @property ExperimentConfig|null $ExperimentConfig
 * @property list<DebugRuleConfiguration>|null $DebugRuleConfigurations
 * @property TensorBoardOutputConfig|null $TensorBoardOutputConfig
 * @property list<DebugRuleEvaluationStatus>|null $DebugRuleEvaluationStatuses
 * @property ProfilerConfig|null $ProfilerConfig
 * @property array<string, string>|null $Environment
 * @property RetryStrategy|null $RetryStrategy
 * @property list<Tag>|null $Tags
 */
class TrainingJob extends Shape
{
    /**
     * @param array{
     *     TrainingJobName?: string|null,
     *     TrainingJobArn?: string|null,
     *     TuningJobArn?: string|null,
     *     LabelingJobArn?: string|null,
     *     AutoMLJobArn?: string|null,
     *     ModelArtifacts?: ModelArtifacts|null,
     *     TrainingJobStatus?: 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped'|null,
     *     SecondaryStatus?: 'Starting'|'LaunchingMLInstances'|'PreparingTrainingStack'|'Downloading'|'DownloadingTrainingImage'|'Training'|'Uploading'|'Stopping'|'Stopped'|'MaxRuntimeExceeded'|'Completed'|'Failed'|'Interrupted'|'MaxWaitTimeExceeded'|'Updating'|'Restarting'|'Pending'|null,
     *     FailureReason?: string|null,
     *     HyperParameters?: array<string, string>|null,
     *     AlgorithmSpecification?: AlgorithmSpecification|null,
     *     RoleArn?: string|null,
     *     InputDataConfig?: list<Channel>|null,
     *     OutputDataConfig?: OutputDataConfig|null,
     *     ResourceConfig?: ResourceConfig|null,
     *     VpcConfig?: VpcConfig|null,
     *     StoppingCondition?: StoppingCondition|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     TrainingStartTime?: \Aws\Api\DateTimeResult|null,
     *     TrainingEndTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     SecondaryStatusTransitions?: list<SecondaryStatusTransition>|null,
     *     FinalMetricDataList?: list<MetricData>|null,
     *     EnableNetworkIsolation?: bool|null,
     *     EnableInterContainerTrafficEncryption?: bool|null,
     *     EnableManagedSpotTraining?: bool|null,
     *     CheckpointConfig?: CheckpointConfig|null,
     *     TrainingTimeInSeconds?: int<1, max>|null,
     *     BillableTimeInSeconds?: int<1, max>|null,
     *     DebugHookConfig?: DebugHookConfig|null,
     *     ExperimentConfig?: ExperimentConfig|null,
     *     DebugRuleConfigurations?: list<DebugRuleConfiguration>|null,
     *     TensorBoardOutputConfig?: TensorBoardOutputConfig|null,
     *     DebugRuleEvaluationStatuses?: list<DebugRuleEvaluationStatus>|null,
     *     ProfilerConfig?: ProfilerConfig|null,
     *     Environment?: array<string, string>|null,
     *     RetryStrategy?: RetryStrategy|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
