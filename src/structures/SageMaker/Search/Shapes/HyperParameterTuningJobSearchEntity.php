<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HyperParameterTuningJobName
 * @property string $HyperParameterTuningJobArn
 * @property HyperParameterTuningJobConfig $HyperParameterTuningJobConfig
 * @property HyperParameterTrainingJobDefinition $TrainingJobDefinition
 * @property list<HyperParameterTrainingJobDefinition> $TrainingJobDefinitions
 * @property 'Completed'|'InProgress'|'Failed'|'Stopped'|'Stopping'|'Deleting'|'DeleteFailed' $HyperParameterTuningJobStatus
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $HyperParameterTuningEndTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property TrainingJobStatusCounters $TrainingJobStatusCounters
 * @property ObjectiveStatusCounters $ObjectiveStatusCounters
 * @property HyperParameterTrainingJobSummary $BestTrainingJob
 * @property HyperParameterTrainingJobSummary $OverallBestTrainingJob
 * @property HyperParameterTuningJobWarmStartConfig $WarmStartConfig
 * @property string $FailureReason
 * @property HyperParameterTuningJobCompletionDetails $TuningJobCompletionDetails
 * @property HyperParameterTuningJobConsumedResources $ConsumedResources
 * @property list<Tag> $Tags
 */
class HyperParameterTuningJobSearchEntity extends Shape
{
    /**
     * @param array{
     *     HyperParameterTuningJobName?: string,
     *     HyperParameterTuningJobArn?: string,
     *     HyperParameterTuningJobConfig?: HyperParameterTuningJobConfig,
     *     TrainingJobDefinition?: HyperParameterTrainingJobDefinition,
     *     TrainingJobDefinitions?: list<HyperParameterTrainingJobDefinition>,
     *     HyperParameterTuningJobStatus?: 'Completed'|'InProgress'|'Failed'|'Stopped'|'Stopping'|'Deleting'|'DeleteFailed',
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     HyperParameterTuningEndTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     TrainingJobStatusCounters?: TrainingJobStatusCounters,
     *     ObjectiveStatusCounters?: ObjectiveStatusCounters,
     *     BestTrainingJob?: HyperParameterTrainingJobSummary,
     *     OverallBestTrainingJob?: HyperParameterTrainingJobSummary,
     *     WarmStartConfig?: HyperParameterTuningJobWarmStartConfig,
     *     FailureReason?: string,
     *     TuningJobCompletionDetails?: HyperParameterTuningJobCompletionDetails,
     *     ConsumedResources?: HyperParameterTuningJobConsumedResources,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
