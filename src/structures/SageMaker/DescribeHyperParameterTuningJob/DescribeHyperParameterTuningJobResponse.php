<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeHyperParameterTuningJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $HyperParameterTuningJobName
 * @property string $HyperParameterTuningJobArn
 * @property Shapes\HyperParameterTuningJobConfig $HyperParameterTuningJobConfig
 * @property Shapes\HyperParameterTrainingJobDefinition|null $TrainingJobDefinition
 * @property list<Shapes\HyperParameterTrainingJobDefinition>|null $TrainingJobDefinitions
 * @property 'Completed'|'InProgress'|'Failed'|'Stopped'|'Stopping' $HyperParameterTuningJobStatus
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult|null $HyperParameterTuningEndTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property Shapes\TrainingJobStatusCounters $TrainingJobStatusCounters
 * @property Shapes\ObjectiveStatusCounters $ObjectiveStatusCounters
 * @property Shapes\HyperParameterTrainingJobSummary|null $BestTrainingJob
 * @property Shapes\HyperParameterTrainingJobSummary|null $OverallBestTrainingJob
 * @property Shapes\HyperParameterTuningJobWarmStartConfig|null $WarmStartConfig
 * @property string|null $FailureReason
 * @property Shapes\HyperParameterTuningJobCompletionDetails|null $TuningJobCompletionDetails
 * @property Shapes\HyperParameterTuningJobConsumedResources|null $ConsumedResources
 * @property Shapes\Autotune|null $Autotune
 */
class DescribeHyperParameterTuningJobResponse extends Response
{
}
