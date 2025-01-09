<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeProcessingJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\ProcessingInput> $ProcessingInputs
 * @property Shapes\ProcessingOutputConfig $ProcessingOutputConfig
 * @property string $ProcessingJobName
 * @property Shapes\ProcessingResources $ProcessingResources
 * @property Shapes\ProcessingStoppingCondition $StoppingCondition
 * @property Shapes\AppSpecification $AppSpecification
 * @property array<string, string> $Environment
 * @property Shapes\NetworkConfig $NetworkConfig
 * @property string $RoleArn
 * @property Shapes\ExperimentConfig $ExperimentConfig
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
 */
class DescribeProcessingJobResponse extends Response
{
}
