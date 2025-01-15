<?php

namespace Sunaoka\Aws\Structures\Braket\GetJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\AlgorithmSpecification $algorithmSpecification
 * @property list<Shapes\Association>|null $associations
 * @property int|null $billableDuration
 * @property Shapes\JobCheckpointConfig|null $checkpointConfig
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property Shapes\DeviceConfig|null $deviceConfig
 * @property \Aws\Api\DateTimeResult|null $endedAt
 * @property list<Shapes\JobEventDetails>|null $events
 * @property string|null $failureReason
 * @property array<string, string>|null $hyperParameters
 * @property list<Shapes\InputFileConfig>|null $inputDataConfig
 * @property Shapes\InstanceConfig $instanceConfig
 * @property string $jobArn
 * @property string $jobName
 * @property Shapes\JobOutputDataConfig $outputDataConfig
 * @property Shapes\HybridJobQueueInfo|null $queueInfo
 * @property string $roleArn
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property 'QUEUED'|'RUNNING'|'COMPLETED'|'FAILED'|'CANCELLING'|'CANCELLED' $status
 * @property Shapes\JobStoppingCondition|null $stoppingCondition
 * @property array<string, string>|null $tags
 */
class GetJobResponse extends Response
{
}
