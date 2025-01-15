<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $arn
 * @property string|null $supportCode
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property ResourceLocation|null $location
 * @property 'ContainerService'|'Instance'|'StaticIp'|'KeyPair'|'InstanceSnapshot'|'Domain'|'PeeredVpc'|'LoadBalancer'|'LoadBalancerTlsCertificate'|'Disk'|'DiskSnapshot'|'RelationalDatabase'|'RelationalDatabaseSnapshot'|'ExportSnapshotRecord'|'CloudFormationStackRecord'|'Alarm'|'ContactMethod'|'Distribution'|'Certificate'|'Bucket'|null $resourceType
 * @property list<Tag>|null $tags
 * @property list<AddOn>|null $addOns
 * @property int|null $sizeInGb
 * @property bool|null $isSystemDisk
 * @property int|null $iops
 * @property string|null $path
 * @property 'pending'|'error'|'available'|'in-use'|'unknown'|null $state
 * @property string|null $attachedTo
 * @property bool|null $isAttached
 * @property string|null $attachmentState
 * @property int|null $gbInUse
 * @property 'Failed'|'Pending'|'Mounted'|'NotMounted'|null $autoMountStatus
 */
class Disk extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     arn?: string|null,
     *     supportCode?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     location?: ResourceLocation|null,
     *     resourceType?: 'ContainerService'|'Instance'|'StaticIp'|'KeyPair'|'InstanceSnapshot'|'Domain'|'PeeredVpc'|'LoadBalancer'|'LoadBalancerTlsCertificate'|'Disk'|'DiskSnapshot'|'RelationalDatabase'|'RelationalDatabaseSnapshot'|'ExportSnapshotRecord'|'CloudFormationStackRecord'|'Alarm'|'ContactMethod'|'Distribution'|'Certificate'|'Bucket'|null,
     *     tags?: list<Tag>|null,
     *     addOns?: list<AddOn>|null,
     *     sizeInGb?: int|null,
     *     isSystemDisk?: bool|null,
     *     iops?: int|null,
     *     path?: string|null,
     *     state?: 'pending'|'error'|'available'|'in-use'|'unknown'|null,
     *     attachedTo?: string|null,
     *     isAttached?: bool|null,
     *     attachmentState?: string|null,
     *     gbInUse?: int|null,
     *     autoMountStatus?: 'Failed'|'Pending'|'Mounted'|'NotMounted'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
