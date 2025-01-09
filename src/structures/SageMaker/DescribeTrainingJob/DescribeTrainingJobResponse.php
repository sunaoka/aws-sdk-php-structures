<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeTrainingJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $TrainingJobName
 * @property string $TrainingJobArn
 * @property string $TuningJobArn
 * @property string $LabelingJobArn
 * @property string $AutoMLJobArn
 * @property Shapes\ModelArtifacts $ModelArtifacts
 * @property 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped' $TrainingJobStatus
 * @property 'Starting'|'LaunchingMLInstances'|'PreparingTrainingStack'|'Downloading'|'DownloadingTrainingImage'|'Training'|'Uploading'|'Stopping'|'Stopped'|'MaxRuntimeExceeded'|'Completed'|'Failed'|'Interrupted'|'MaxWaitTimeExceeded'|'Updating'|'Restarting'|'Pending' $SecondaryStatus
 * @property string $FailureReason
 * @property array<string, string> $HyperParameters
 * @property Shapes\AlgorithmSpecification $AlgorithmSpecification
 * @property string $RoleArn
 * @property list<Shapes\Channel> $InputDataConfig
 * @property Shapes\OutputDataConfig $OutputDataConfig
 * @property Shapes\ResourceConfig $ResourceConfig
 * @property Shapes\WarmPoolStatus $WarmPoolStatus
 * @property Shapes\VpcConfig $VpcConfig
 * @property Shapes\StoppingCondition $StoppingCondition
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $TrainingStartTime
 * @property \Aws\Api\DateTimeResult $TrainingEndTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property list<Shapes\SecondaryStatusTransition> $SecondaryStatusTransitions
 * @property list<Shapes\MetricData> $FinalMetricDataList
 * @property bool $EnableNetworkIsolation
 * @property bool $EnableInterContainerTrafficEncryption
 * @property bool $EnableManagedSpotTraining
 * @property Shapes\CheckpointConfig $CheckpointConfig
 * @property int<1, max> $TrainingTimeInSeconds
 * @property int<1, max> $BillableTimeInSeconds
 * @property Shapes\DebugHookConfig $DebugHookConfig
 * @property Shapes\ExperimentConfig $ExperimentConfig
 * @property list<Shapes\DebugRuleConfiguration> $DebugRuleConfigurations
 * @property Shapes\TensorBoardOutputConfig $TensorBoardOutputConfig
 * @property list<Shapes\DebugRuleEvaluationStatus> $DebugRuleEvaluationStatuses
 * @property Shapes\ProfilerConfig $ProfilerConfig
 * @property list<Shapes\ProfilerRuleConfiguration> $ProfilerRuleConfigurations
 * @property list<Shapes\ProfilerRuleEvaluationStatus> $ProfilerRuleEvaluationStatuses
 * @property 'Enabled'|'Disabled' $ProfilingStatus
 * @property array<string, string> $Environment
 * @property Shapes\RetryStrategy $RetryStrategy
 * @property Shapes\RemoteDebugConfig $RemoteDebugConfig
 * @property Shapes\InfraCheckConfig $InfraCheckConfig
 */
class DescribeTrainingJobResponse extends Response
{
}
