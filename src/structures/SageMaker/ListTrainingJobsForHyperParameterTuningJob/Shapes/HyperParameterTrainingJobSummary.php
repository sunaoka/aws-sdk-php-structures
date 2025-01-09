<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListTrainingJobsForHyperParameterTuningJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TrainingJobDefinitionName
 * @property string $TrainingJobName
 * @property string $TrainingJobArn
 * @property string $TuningJobName
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $TrainingStartTime
 * @property \Aws\Api\DateTimeResult $TrainingEndTime
 * @property 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped' $TrainingJobStatus
 * @property array<string, string> $TunedHyperParameters
 * @property string $FailureReason
 * @property FinalHyperParameterTuningJobObjectiveMetric $FinalHyperParameterTuningJobObjectiveMetric
 * @property 'Succeeded'|'Pending'|'Failed' $ObjectiveStatus
 */
class HyperParameterTrainingJobSummary extends Shape
{
    /**
     * @param array{
     *     TrainingJobDefinitionName?: string,
     *     TrainingJobName: string,
     *     TrainingJobArn: string,
     *     TuningJobName?: string,
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     TrainingStartTime?: \Aws\Api\DateTimeResult,
     *     TrainingEndTime?: \Aws\Api\DateTimeResult,
     *     TrainingJobStatus: 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped',
     *     TunedHyperParameters: array<string, string>,
     *     FailureReason?: string,
     *     FinalHyperParameterTuningJobObjectiveMetric?: FinalHyperParameterTuningJobObjectiveMetric,
     *     ObjectiveStatus?: 'Succeeded'|'Pending'|'Failed'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
