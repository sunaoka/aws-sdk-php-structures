<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ProcessingInput> $ProcessingInputs
 * @property ProcessingOutputConfig $ProcessingOutputConfig
 * @property string $ProcessingJobName
 * @property ProcessingResources $ProcessingResources
 * @property ProcessingStoppingCondition $StoppingCondition
 * @property AppSpecification $AppSpecification
 * @property array<string, string> $Environment
 * @property NetworkConfig $NetworkConfig
 * @property string $RoleArn
 * @property ExperimentConfig $ExperimentConfig
 * @property string $ProcessingJobArn
 * @property 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped' $ProcessingJobStatus
 * @property string $ExitMessage
 * @property string $FailureReason
 * @property \Aws\Api\DateTimeResult $ProcessingEndTime
 * @property \Aws\Api\DateTimeResult $ProcessingStartTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $MonitoringScheduleArn
 * @property string $AutoMLJobArn
 * @property string $TrainingJobArn
 * @property list<Tag> $Tags
 */
class ProcessingJob extends Shape
{
    /**
     * @param array{
     *     ProcessingInputs?: list<ProcessingInput>,
     *     ProcessingOutputConfig?: ProcessingOutputConfig,
     *     ProcessingJobName?: string,
     *     ProcessingResources?: ProcessingResources,
     *     StoppingCondition?: ProcessingStoppingCondition,
     *     AppSpecification?: AppSpecification,
     *     Environment?: array<string, string>,
     *     NetworkConfig?: NetworkConfig,
     *     RoleArn?: string,
     *     ExperimentConfig?: ExperimentConfig,
     *     ProcessingJobArn?: string,
     *     ProcessingJobStatus?: 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped',
     *     ExitMessage?: string,
     *     FailureReason?: string,
     *     ProcessingEndTime?: \Aws\Api\DateTimeResult,
     *     ProcessingStartTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     MonitoringScheduleArn?: string,
     *     AutoMLJobArn?: string,
     *     TrainingJobArn?: string,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
