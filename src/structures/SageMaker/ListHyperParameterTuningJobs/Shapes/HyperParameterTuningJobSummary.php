<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListHyperParameterTuningJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HyperParameterTuningJobName
 * @property string $HyperParameterTuningJobArn
 * @property 'Completed'|'InProgress'|'Failed'|'Stopped'|'Stopping'|'Deleting'|'DeleteFailed' $HyperParameterTuningJobStatus
 * @property 'Bayesian'|'Random'|'Hyperband'|'Grid' $Strategy
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $HyperParameterTuningEndTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property TrainingJobStatusCounters $TrainingJobStatusCounters
 * @property ObjectiveStatusCounters $ObjectiveStatusCounters
 * @property ResourceLimits $ResourceLimits
 */
class HyperParameterTuningJobSummary extends Shape
{
    /**
     * @param array{
     *     HyperParameterTuningJobName: string,
     *     HyperParameterTuningJobArn: string,
     *     HyperParameterTuningJobStatus: 'Completed'|'InProgress'|'Failed'|'Stopped'|'Stopping'|'Deleting'|'DeleteFailed',
     *     Strategy: 'Bayesian'|'Random'|'Hyperband'|'Grid',
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     HyperParameterTuningEndTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     TrainingJobStatusCounters: TrainingJobStatusCounters,
     *     ObjectiveStatusCounters: ObjectiveStatusCounters,
     *     ResourceLimits?: ResourceLimits
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
