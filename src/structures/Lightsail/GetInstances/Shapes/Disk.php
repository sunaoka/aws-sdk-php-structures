<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $arn
 * @property string $supportCode
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property ResourceLocation $location
 * @property 'ContainerService'|'Instance'|'StaticIp'|'KeyPair'|'InstanceSnapshot'|'Domain'|'PeeredVpc'|'LoadBalancer'|'LoadBalancerTlsCertificate'|'Disk'|'DiskSnapshot'|'RelationalDatabase'|'RelationalDatabaseSnapshot'|'ExportSnapshotRecord'|'CloudFormationStackRecord'|'Alarm'|'ContactMethod'|'Distribution'|'Certificate'|'Bucket' $resourceType
 * @property list<Tag> $tags
 * @property list<AddOn> $addOns
 * @property int $sizeInGb
 * @property bool $isSystemDisk
 * @property int $iops
 * @property string $path
 * @property 'pending'|'error'|'available'|'in-use'|'unknown' $state
 * @property string $attachedTo
 * @property bool $isAttached
 * @property string $attachmentState
 * @property int $gbInUse
 * @property 'Failed'|'Pending'|'Mounted'|'NotMounted' $autoMountStatus
 */
class Disk extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     arn?: string,
     *     supportCode?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     location?: ResourceLocation,
     *     resourceType?: 'ContainerService'|'Instance'|'StaticIp'|'KeyPair'|'InstanceSnapshot'|'Domain'|'PeeredVpc'|'LoadBalancer'|'LoadBalancerTlsCertificate'|'Disk'|'DiskSnapshot'|'RelationalDatabase'|'RelationalDatabaseSnapshot'|'ExportSnapshotRecord'|'CloudFormationStackRecord'|'Alarm'|'ContactMethod'|'Distribution'|'Certificate'|'Bucket',
     *     tags?: list<Tag>,
     *     addOns?: list<AddOn>,
     *     sizeInGb?: int,
     *     isSystemDisk?: bool,
     *     iops?: int,
     *     path?: string,
     *     state?: 'pending'|'error'|'available'|'in-use'|'unknown',
     *     attachedTo?: string,
     *     isAttached?: bool,
     *     attachmentState?: string,
     *     gbInUse?: int,
     *     autoMountStatus?: 'Failed'|'Pending'|'Mounted'|'NotMounted'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
