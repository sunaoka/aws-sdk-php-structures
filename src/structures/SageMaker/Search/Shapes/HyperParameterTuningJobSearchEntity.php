<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $HyperParameterTuningJobName
 * @property string|null $HyperParameterTuningJobArn
 * @property HyperParameterTuningJobConfig|null $HyperParameterTuningJobConfig
 * @property HyperParameterTrainingJobDefinition|null $TrainingJobDefinition
 * @property list<HyperParameterTrainingJobDefinition>|null $TrainingJobDefinitions
 * @property 'Completed'|'InProgress'|'Failed'|'Stopped'|'Stopping'|'Deleting'|'DeleteFailed'|null $HyperParameterTuningJobStatus
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $HyperParameterTuningEndTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property TrainingJobStatusCounters|null $TrainingJobStatusCounters
 * @property ObjectiveStatusCounters|null $ObjectiveStatusCounters
 * @property HyperParameterTrainingJobSummary|null $BestTrainingJob
 * @property HyperParameterTrainingJobSummary|null $OverallBestTrainingJob
 * @property HyperParameterTuningJobWarmStartConfig|null $WarmStartConfig
 * @property string|null $FailureReason
 * @property HyperParameterTuningJobCompletionDetails|null $TuningJobCompletionDetails
 * @property HyperParameterTuningJobConsumedResources|null $ConsumedResources
 * @property list<Tag>|null $Tags
 */
class HyperParameterTuningJobSearchEntity extends Shape
{
    /**
     * @param array{
     *     HyperParameterTuningJobName?: string|null,
     *     HyperParameterTuningJobArn?: string|null,
     *     HyperParameterTuningJobConfig?: HyperParameterTuningJobConfig|null,
     *     TrainingJobDefinition?: HyperParameterTrainingJobDefinition|null,
     *     TrainingJobDefinitions?: list<HyperParameterTrainingJobDefinition>|null,
     *     HyperParameterTuningJobStatus?: 'Completed'|'InProgress'|'Failed'|'Stopped'|'Stopping'|'Deleting'|'DeleteFailed'|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     HyperParameterTuningEndTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     TrainingJobStatusCounters?: TrainingJobStatusCounters|null,
     *     ObjectiveStatusCounters?: ObjectiveStatusCounters|null,
     *     BestTrainingJob?: HyperParameterTrainingJobSummary|null,
     *     OverallBestTrainingJob?: HyperParameterTrainingJobSummary|null,
     *     WarmStartConfig?: HyperParameterTuningJobWarmStartConfig|null,
     *     FailureReason?: string|null,
     *     TuningJobCompletionDetails?: HyperParameterTuningJobCompletionDetails|null,
     *     ConsumedResources?: HyperParameterTuningJobConsumedResources|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
