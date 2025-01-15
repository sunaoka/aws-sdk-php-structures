<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ProcessingInput>|null $ProcessingInputs
 * @property ProcessingOutputConfig|null $ProcessingOutputConfig
 * @property string|null $ProcessingJobName
 * @property ProcessingResources|null $ProcessingResources
 * @property ProcessingStoppingCondition|null $StoppingCondition
 * @property AppSpecification|null $AppSpecification
 * @property array<string, string>|null $Environment
 * @property NetworkConfig|null $NetworkConfig
 * @property string|null $RoleArn
 * @property ExperimentConfig|null $ExperimentConfig
 * @property string|null $ProcessingJobArn
 * @property 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped'|null $ProcessingJobStatus
 * @property string|null $ExitMessage
 * @property string|null $FailureReason
 * @property \Aws\Api\DateTimeResult|null $ProcessingEndTime
 * @property \Aws\Api\DateTimeResult|null $ProcessingStartTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property string|null $MonitoringScheduleArn
 * @property string|null $AutoMLJobArn
 * @property string|null $TrainingJobArn
 * @property list<Tag>|null $Tags
 */
class ProcessingJob extends Shape
{
    /**
     * @param array{
     *     ProcessingInputs?: list<ProcessingInput>|null,
     *     ProcessingOutputConfig?: ProcessingOutputConfig|null,
     *     ProcessingJobName?: string|null,
     *     ProcessingResources?: ProcessingResources|null,
     *     StoppingCondition?: ProcessingStoppingCondition|null,
     *     AppSpecification?: AppSpecification|null,
     *     Environment?: array<string, string>|null,
     *     NetworkConfig?: NetworkConfig|null,
     *     RoleArn?: string|null,
     *     ExperimentConfig?: ExperimentConfig|null,
     *     ProcessingJobArn?: string|null,
     *     ProcessingJobStatus?: 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped'|null,
     *     ExitMessage?: string|null,
     *     FailureReason?: string|null,
     *     ProcessingEndTime?: \Aws\Api\DateTimeResult|null,
     *     ProcessingStartTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     MonitoringScheduleArn?: string|null,
     *     AutoMLJobArn?: string|null,
     *     TrainingJobArn?: string|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
