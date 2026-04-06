<?php

namespace Sunaoka\Aws\Structures\Evs\CreateEnvironmentHost\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $hostName
 * @property string|null $ipAddress
 * @property string|null $keyName
 * @property 'i4i.metal'|null $instanceType
 * @property string|null $placementGroupId
 * @property string|null $dedicatedHostId
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $modifiedAt
 * @property 'CREATING'|'CREATED'|'UPDATING'|'DELETING'|'DELETED'|'CREATE_FAILED'|'UPDATE_FAILED'|null $hostState
 * @property string|null $stateDetails
 * @property string|null $ec2InstanceId
 * @property list<NetworkInterface>|null $networkInterfaces
 */
class Host extends Shape
{
    /**
     * @param array{
     *     hostName?: string|null,
     *     ipAddress?: string|null,
     *     keyName?: string|null,
     *     instanceType?: 'i4i.metal'|null,
     *     placementGroupId?: string|null,
     *     dedicatedHostId?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     modifiedAt?: \Aws\Api\DateTimeResult|null,
     *     hostState?: 'CREATING'|'CREATED'|'UPDATING'|'DELETING'|'DELETED'|'CREATE_FAILED'|'UPDATE_FAILED'|null,
     *     stateDetails?: string|null,
     *     ec2InstanceId?: string|null,
     *     networkInterfaces?: list<NetworkInterface>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
