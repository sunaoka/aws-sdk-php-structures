<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeProcessingJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\ProcessingInput>|null $ProcessingInputs
 * @property Shapes\ProcessingOutputConfig|null $ProcessingOutputConfig
 * @property string $ProcessingJobName
 * @property Shapes\ProcessingResources $ProcessingResources
 * @property Shapes\ProcessingStoppingCondition|null $StoppingCondition
 * @property Shapes\AppSpecification $AppSpecification
 * @property array<string, string>|null $Environment
 * @property Shapes\NetworkConfig|null $NetworkConfig
 * @property string|null $RoleArn
 * @property Shapes\ExperimentConfig|null $ExperimentConfig
 * @property string $ProcessingJobArn
 * @property 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped' $ProcessingJobStatus
 * @property string|null $ExitMessage
 * @property string|null $FailureReason
 * @property \Aws\Api\DateTimeResult|null $ProcessingEndTime
 * @property \Aws\Api\DateTimeResult|null $ProcessingStartTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string|null $MonitoringScheduleArn
 * @property string|null $AutoMLJobArn
 * @property string|null $TrainingJobArn
 */
class DescribeProcessingJobResponse extends Response
{
}
