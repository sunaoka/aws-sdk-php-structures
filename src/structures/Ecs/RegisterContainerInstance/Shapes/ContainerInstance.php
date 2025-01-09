<?php

namespace Sunaoka\Aws\Structures\Ecs\RegisterContainerInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $containerInstanceArn
 * @property string $ec2InstanceId
 * @property string $capacityProviderName
 * @property int $version
 * @property VersionInfo $versionInfo
 * @property list<Resource> $remainingResources
 * @property list<Resource> $registeredResources
 * @property string $status
 * @property string $statusReason
 * @property bool $agentConnected
 * @property int $runningTasksCount
 * @property int $pendingTasksCount
 * @property 'PENDING'|'STAGING'|'STAGED'|'UPDATING'|'UPDATED'|'FAILED' $agentUpdateStatus
 * @property list<Attribute> $attributes
 * @property \Aws\Api\DateTimeResult $registeredAt
 * @property list<Attachment> $attachments
 * @property list<Tag> $tags
 * @property ContainerInstanceHealthStatus $healthStatus
 */
class ContainerInstance extends Shape
{
    /**
     * @param array{
     *     containerInstanceArn?: string,
     *     ec2InstanceId?: string,
     *     capacityProviderName?: string,
     *     version?: int,
     *     versionInfo?: VersionInfo,
     *     remainingResources?: list<Resource>,
     *     registeredResources?: list<Resource>,
     *     status?: string,
     *     statusReason?: string,
     *     agentConnected?: bool,
     *     runningTasksCount?: int,
     *     pendingTasksCount?: int,
     *     agentUpdateStatus?: 'PENDING'|'STAGING'|'STAGED'|'UPDATING'|'UPDATED'|'FAILED',
     *     attributes?: list<Attribute>,
     *     registeredAt?: \Aws\Api\DateTimeResult,
     *     attachments?: list<Attachment>,
     *     tags?: list<Tag>,
     *     healthStatus?: ContainerInstanceHealthStatus
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
