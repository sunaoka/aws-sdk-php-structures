<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeHyperParameterTuningJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TrainingJobDefinitionName
 * @property string $TrainingJobName
 * @property string $TrainingJobArn
 * @property string|null $TuningJobName
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult|null $TrainingStartTime
 * @property \Aws\Api\DateTimeResult|null $TrainingEndTime
 * @property 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped'|'Deleting' $TrainingJobStatus
 * @property array<string, string> $TunedHyperParameters
 * @property string|null $FailureReason
 * @property FinalHyperParameterTuningJobObjectiveMetric|null $FinalHyperParameterTuningJobObjectiveMetric
 * @property 'Succeeded'|'Pending'|'Failed'|null $ObjectiveStatus
 */
class HyperParameterTrainingJobSummary extends Shape
{
    /**
     * @param array{
     *     TrainingJobDefinitionName?: string|null,
     *     TrainingJobName: string,
     *     TrainingJobArn: string,
     *     TuningJobName?: string|null,
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     TrainingStartTime?: \Aws\Api\DateTimeResult|null,
     *     TrainingEndTime?: \Aws\Api\DateTimeResult|null,
     *     TrainingJobStatus: 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped'|'Deleting',
     *     TunedHyperParameters: array<string, string>,
     *     FailureReason?: string|null,
     *     FinalHyperParameterTuningJobObjectiveMetric?: FinalHyperParameterTuningJobObjectiveMetric|null,
     *     ObjectiveStatus?: 'Succeeded'|'Pending'|'Failed'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
