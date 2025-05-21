<?php

namespace Sunaoka\Aws\Structures\Ecs\DeregisterContainerInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $containerInstanceArn
 * @property string|null $ec2InstanceId
 * @property string|null $capacityProviderName
 * @property int|null $version
 * @property VersionInfo|null $versionInfo
 * @property list<ResourceShape>|null $remainingResources
 * @property list<ResourceShape>|null $registeredResources
 * @property string|null $status
 * @property string|null $statusReason
 * @property bool|null $agentConnected
 * @property int|null $runningTasksCount
 * @property int|null $pendingTasksCount
 * @property 'PENDING'|'STAGING'|'STAGED'|'UPDATING'|'UPDATED'|'FAILED'|null $agentUpdateStatus
 * @property list<Attribute>|null $attributes
 * @property \Aws\Api\DateTimeResult|null $registeredAt
 * @property list<Attachment>|null $attachments
 * @property list<Tag>|null $tags
 * @property ContainerInstanceHealthStatus|null $healthStatus
 */
class ContainerInstance extends Shape
{
    /**
     * @param array{
     *     containerInstanceArn?: string|null,
     *     ec2InstanceId?: string|null,
     *     capacityProviderName?: string|null,
     *     version?: int|null,
     *     versionInfo?: VersionInfo|null,
     *     remainingResources?: list<ResourceShape>|null,
     *     registeredResources?: list<ResourceShape>|null,
     *     status?: string|null,
     *     statusReason?: string|null,
     *     agentConnected?: bool|null,
     *     runningTasksCount?: int|null,
     *     pendingTasksCount?: int|null,
     *     agentUpdateStatus?: 'PENDING'|'STAGING'|'STAGED'|'UPDATING'|'UPDATED'|'FAILED'|null,
     *     attributes?: list<Attribute>|null,
     *     registeredAt?: \Aws\Api\DateTimeResult|null,
     *     attachments?: list<Attachment>|null,
     *     tags?: list<Tag>|null,
     *     healthStatus?: ContainerInstanceHealthStatus|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
