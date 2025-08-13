<?php

namespace Sunaoka\Aws\Structures\Braket\GetJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'QUEUED'|'RUNNING'|'COMPLETED'|'FAILED'|'CANCELLING'|'CANCELLED' $status
 * @property string $jobArn
 * @property string $roleArn
 * @property string|null $failureReason
 * @property string $jobName
 * @property array<string, string>|null $hyperParameters
 * @property list<Shapes\InputFileConfig>|null $inputDataConfig
 * @property Shapes\JobOutputDataConfig $outputDataConfig
 * @property Shapes\JobStoppingCondition|null $stoppingCondition
 * @property Shapes\JobCheckpointConfig|null $checkpointConfig
 * @property Shapes\AlgorithmSpecification $algorithmSpecification
 * @property Shapes\InstanceConfig $instanceConfig
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property \Aws\Api\DateTimeResult|null $endedAt
 * @property int|null $billableDuration
 * @property Shapes\DeviceConfig|null $deviceConfig
 * @property list<Shapes\JobEventDetails>|null $events
 * @property array<string, string>|null $tags
 * @property Shapes\HybridJobQueueInfo|null $queueInfo
 * @property list<Shapes\Association>|null $associations
 */
class GetJobResponse extends Response
{
}
