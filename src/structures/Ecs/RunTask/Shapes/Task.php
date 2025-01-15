<?php

namespace Sunaoka\Aws\Structures\Ecs\RunTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Attachment>|null $attachments
 * @property list<Attribute>|null $attributes
 * @property string|null $availabilityZone
 * @property string|null $capacityProviderName
 * @property string|null $clusterArn
 * @property 'CONNECTED'|'DISCONNECTED'|null $connectivity
 * @property \Aws\Api\DateTimeResult|null $connectivityAt
 * @property string|null $containerInstanceArn
 * @property list<Container>|null $containers
 * @property string|null $cpu
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $desiredStatus
 * @property bool|null $enableExecuteCommand
 * @property \Aws\Api\DateTimeResult|null $executionStoppedAt
 * @property string|null $group
 * @property 'HEALTHY'|'UNHEALTHY'|'UNKNOWN'|null $healthStatus
 * @property list<InferenceAccelerator>|null $inferenceAccelerators
 * @property string|null $lastStatus
 * @property 'EC2'|'FARGATE'|'EXTERNAL'|null $launchType
 * @property string|null $memory
 * @property TaskOverride|null $overrides
 * @property string|null $platformVersion
 * @property string|null $platformFamily
 * @property \Aws\Api\DateTimeResult|null $pullStartedAt
 * @property \Aws\Api\DateTimeResult|null $pullStoppedAt
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property string|null $startedBy
 * @property 'TaskFailedToStart'|'EssentialContainerExited'|'UserInitiated'|'ServiceSchedulerInitiated'|'SpotInterruption'|'TerminationNotice'|null $stopCode
 * @property \Aws\Api\DateTimeResult|null $stoppedAt
 * @property string|null $stoppedReason
 * @property \Aws\Api\DateTimeResult|null $stoppingAt
 * @property list<Tag>|null $tags
 * @property string|null $taskArn
 * @property string|null $taskDefinitionArn
 * @property int|null $version
 * @property EphemeralStorage|null $ephemeralStorage
 * @property TaskEphemeralStorage|null $fargateEphemeralStorage
 */
class Task extends Shape
{
    /**
     * @param array{
     *     attachments?: list<Attachment>|null,
     *     attributes?: list<Attribute>|null,
     *     availabilityZone?: string|null,
     *     capacityProviderName?: string|null,
     *     clusterArn?: string|null,
     *     connectivity?: 'CONNECTED'|'DISCONNECTED'|null,
     *     connectivityAt?: \Aws\Api\DateTimeResult|null,
     *     containerInstanceArn?: string|null,
     *     containers?: list<Container>|null,
     *     cpu?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     desiredStatus?: string|null,
     *     enableExecuteCommand?: bool|null,
     *     executionStoppedAt?: \Aws\Api\DateTimeResult|null,
     *     group?: string|null,
     *     healthStatus?: 'HEALTHY'|'UNHEALTHY'|'UNKNOWN'|null,
     *     inferenceAccelerators?: list<InferenceAccelerator>|null,
     *     lastStatus?: string|null,
     *     launchType?: 'EC2'|'FARGATE'|'EXTERNAL'|null,
     *     memory?: string|null,
     *     overrides?: TaskOverride|null,
     *     platformVersion?: string|null,
     *     platformFamily?: string|null,
     *     pullStartedAt?: \Aws\Api\DateTimeResult|null,
     *     pullStoppedAt?: \Aws\Api\DateTimeResult|null,
     *     startedAt?: \Aws\Api\DateTimeResult|null,
     *     startedBy?: string|null,
     *     stopCode?: 'TaskFailedToStart'|'EssentialContainerExited'|'UserInitiated'|'ServiceSchedulerInitiated'|'SpotInterruption'|'TerminationNotice'|null,
     *     stoppedAt?: \Aws\Api\DateTimeResult|null,
     *     stoppedReason?: string|null,
     *     stoppingAt?: \Aws\Api\DateTimeResult|null,
     *     tags?: list<Tag>|null,
     *     taskArn?: string|null,
     *     taskDefinitionArn?: string|null,
     *     version?: int|null,
     *     ephemeralStorage?: EphemeralStorage|null,
     *     fargateEphemeralStorage?: TaskEphemeralStorage|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
