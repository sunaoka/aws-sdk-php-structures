<?php

namespace Sunaoka\Aws\Structures\Braket\GetJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\AlgorithmSpecification $algorithmSpecification
 * @property list<Shapes\Association> $associations
 * @property int $billableDuration
 * @property Shapes\JobCheckpointConfig $checkpointConfig
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property Shapes\DeviceConfig $deviceConfig
 * @property \Aws\Api\DateTimeResult $endedAt
 * @property list<Shapes\JobEventDetails> $events
 * @property string $failureReason
 * @property array<string, string> $hyperParameters
 * @property list<Shapes\InputFileConfig> $inputDataConfig
 * @property Shapes\InstanceConfig $instanceConfig
 * @property string $jobArn
 * @property string $jobName
 * @property Shapes\JobOutputDataConfig $outputDataConfig
 * @property Shapes\HybridJobQueueInfo $queueInfo
 * @property string $roleArn
 * @property \Aws\Api\DateTimeResult $startedAt
 * @property 'QUEUED'|'RUNNING'|'COMPLETED'|'FAILED'|'CANCELLING'|'CANCELLED' $status
 * @property Shapes\JobStoppingCondition $stoppingCondition
 * @property array<string, string> $tags
 */
class GetJobResponse extends Response
{
}
