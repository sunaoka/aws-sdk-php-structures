<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeTrainingJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $TrainingJobName
 * @property string $TrainingJobArn
 * @property string|null $TuningJobArn
 * @property string|null $LabelingJobArn
 * @property string|null $AutoMLJobArn
 * @property Shapes\ModelArtifacts $ModelArtifacts
 * @property 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped'|'Deleting' $TrainingJobStatus
 * @property 'Starting'|'LaunchingMLInstances'|'PreparingTrainingStack'|'Downloading'|'DownloadingTrainingImage'|'Training'|'Uploading'|'Stopping'|'Stopped'|'MaxRuntimeExceeded'|'Completed'|'Failed'|'Interrupted'|'MaxWaitTimeExceeded'|'Updating'|'Restarting'|'Pending' $SecondaryStatus
 * @property string|null $FailureReason
 * @property array<string, string>|null $HyperParameters
 * @property Shapes\AlgorithmSpecification|null $AlgorithmSpecification
 * @property string|null $RoleArn
 * @property list<Shapes\Channel>|null $InputDataConfig
 * @property Shapes\OutputDataConfig|null $OutputDataConfig
 * @property Shapes\ResourceConfig|null $ResourceConfig
 * @property Shapes\WarmPoolStatus|null $WarmPoolStatus
 * @property Shapes\VpcConfig|null $VpcConfig
 * @property Shapes\StoppingCondition $StoppingCondition
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult|null $TrainingStartTime
 * @property \Aws\Api\DateTimeResult|null $TrainingEndTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property list<Shapes\SecondaryStatusTransition>|null $SecondaryStatusTransitions
 * @property list<Shapes\MetricData>|null $FinalMetricDataList
 * @property bool|null $EnableNetworkIsolation
 * @property bool|null $EnableInterContainerTrafficEncryption
 * @property bool|null $EnableManagedSpotTraining
 * @property Shapes\CheckpointConfig|null $CheckpointConfig
 * @property int<1, max>|null $TrainingTimeInSeconds
 * @property int<1, max>|null $BillableTimeInSeconds
 * @property Shapes\DebugHookConfig|null $DebugHookConfig
 * @property Shapes\ExperimentConfig|null $ExperimentConfig
 * @property list<Shapes\DebugRuleConfiguration>|null $DebugRuleConfigurations
 * @property Shapes\TensorBoardOutputConfig|null $TensorBoardOutputConfig
 * @property list<Shapes\DebugRuleEvaluationStatus>|null $DebugRuleEvaluationStatuses
 * @property Shapes\ProfilerConfig|null $ProfilerConfig
 * @property list<Shapes\ProfilerRuleConfiguration>|null $ProfilerRuleConfigurations
 * @property list<Shapes\ProfilerRuleEvaluationStatus>|null $ProfilerRuleEvaluationStatuses
 * @property 'Enabled'|'Disabled'|null $ProfilingStatus
 * @property array<string, string>|null $Environment
 * @property Shapes\RetryStrategy|null $RetryStrategy
 * @property Shapes\RemoteDebugConfig|null $RemoteDebugConfig
 * @property Shapes\InfraCheckConfig|null $InfraCheckConfig
 */
class DescribeTrainingJobResponse extends Response
{
}
