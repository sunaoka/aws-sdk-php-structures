<?php

namespace Sunaoka\Aws\Structures\Ecs\StopTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Attachment> $attachments
 * @property list<Attribute> $attributes
 * @property string $availabilityZone
 * @property string $capacityProviderName
 * @property string $clusterArn
 * @property 'CONNECTED'|'DISCONNECTED' $connectivity
 * @property \Aws\Api\DateTimeResult $connectivityAt
 * @property string $containerInstanceArn
 * @property list<Container> $containers
 * @property string $cpu
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $desiredStatus
 * @property bool $enableExecuteCommand
 * @property \Aws\Api\DateTimeResult $executionStoppedAt
 * @property string $group
 * @property 'HEALTHY'|'UNHEALTHY'|'UNKNOWN' $healthStatus
 * @property list<InferenceAccelerator> $inferenceAccelerators
 * @property string $lastStatus
 * @property 'EC2'|'FARGATE'|'EXTERNAL' $launchType
 * @property string $memory
 * @property TaskOverride $overrides
 * @property string $platformVersion
 * @property string $platformFamily
 * @property \Aws\Api\DateTimeResult $pullStartedAt
 * @property \Aws\Api\DateTimeResult $pullStoppedAt
 * @property \Aws\Api\DateTimeResult $startedAt
 * @property string $startedBy
 * @property 'TaskFailedToStart'|'EssentialContainerExited'|'UserInitiated'|'ServiceSchedulerInitiated'|'SpotInterruption'|'TerminationNotice' $stopCode
 * @property \Aws\Api\DateTimeResult $stoppedAt
 * @property string $stoppedReason
 * @property \Aws\Api\DateTimeResult $stoppingAt
 * @property list<Tag> $tags
 * @property string $taskArn
 * @property string $taskDefinitionArn
 * @property int $version
 * @property EphemeralStorage $ephemeralStorage
 * @property TaskEphemeralStorage $fargateEphemeralStorage
 */
class Task extends Shape
{
    /**
     * @param array{
     *     attachments?: list<Attachment>,
     *     attributes?: list<Attribute>,
     *     availabilityZone?: string,
     *     capacityProviderName?: string,
     *     clusterArn?: string,
     *     connectivity?: 'CONNECTED'|'DISCONNECTED',
     *     connectivityAt?: \Aws\Api\DateTimeResult,
     *     containerInstanceArn?: string,
     *     containers?: list<Container>,
     *     cpu?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     desiredStatus?: string,
     *     enableExecuteCommand?: bool,
     *     executionStoppedAt?: \Aws\Api\DateTimeResult,
     *     group?: string,
     *     healthStatus?: 'HEALTHY'|'UNHEALTHY'|'UNKNOWN',
     *     inferenceAccelerators?: list<InferenceAccelerator>,
     *     lastStatus?: string,
     *     launchType?: 'EC2'|'FARGATE'|'EXTERNAL',
     *     memory?: string,
     *     overrides?: TaskOverride,
     *     platformVersion?: string,
     *     platformFamily?: string,
     *     pullStartedAt?: \Aws\Api\DateTimeResult,
     *     pullStoppedAt?: \Aws\Api\DateTimeResult,
     *     startedAt?: \Aws\Api\DateTimeResult,
     *     startedBy?: string,
     *     stopCode?: 'TaskFailedToStart'|'EssentialContainerExited'|'UserInitiated'|'ServiceSchedulerInitiated'|'SpotInterruption'|'TerminationNotice',
     *     stoppedAt?: \Aws\Api\DateTimeResult,
     *     stoppedReason?: string,
     *     stoppingAt?: \Aws\Api\DateTimeResult,
     *     tags?: list<Tag>,
     *     taskArn?: string,
     *     taskDefinitionArn?: string,
     *     version?: int,
     *     ephemeralStorage?: EphemeralStorage,
     *     fargateEphemeralStorage?: TaskEphemeralStorage
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
