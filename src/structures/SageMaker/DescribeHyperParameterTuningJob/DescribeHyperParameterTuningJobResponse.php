<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeHyperParameterTuningJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $HyperParameterTuningJobName
 * @property string $HyperParameterTuningJobArn
 * @property Shapes\HyperParameterTuningJobConfig $HyperParameterTuningJobConfig
 * @property Shapes\HyperParameterTrainingJobDefinition $TrainingJobDefinition
 * @property list<Shapes\HyperParameterTrainingJobDefinition> $TrainingJobDefinitions
 * @property 'Completed'|'InProgress'|'Failed'|'Stopped'|'Stopping'|'Deleting'|'DeleteFailed' $HyperParameterTuningJobStatus
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $HyperParameterTuningEndTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property Shapes\TrainingJobStatusCounters $TrainingJobStatusCounters
 * @property Shapes\ObjectiveStatusCounters $ObjectiveStatusCounters
 * @property Shapes\HyperParameterTrainingJobSummary $BestTrainingJob
 * @property Shapes\HyperParameterTrainingJobSummary $OverallBestTrainingJob
 * @property Shapes\HyperParameterTuningJobWarmStartConfig $WarmStartConfig
 * @property Shapes\Autotune $Autotune
 * @property string $FailureReason
 * @property Shapes\HyperParameterTuningJobCompletionDetails $TuningJobCompletionDetails
 * @property Shapes\HyperParameterTuningJobConsumedResources $ConsumedResources
 */
class DescribeHyperParameterTuningJobResponse extends Response
{
}
