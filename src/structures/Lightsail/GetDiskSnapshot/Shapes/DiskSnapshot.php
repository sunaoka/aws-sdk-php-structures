<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetDiskSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $arn
 * @property string|null $supportCode
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property ResourceLocation|null $location
 * @property 'ContainerService'|'Instance'|'StaticIp'|'KeyPair'|'InstanceSnapshot'|'Domain'|'PeeredVpc'|'LoadBalancer'|'LoadBalancerTlsCertificate'|'Disk'|'DiskSnapshot'|'RelationalDatabase'|'RelationalDatabaseSnapshot'|'ExportSnapshotRecord'|'CloudFormationStackRecord'|'Alarm'|'ContactMethod'|'Distribution'|'Certificate'|'Bucket'|null $resourceType
 * @property list<Tag>|null $tags
 * @property int|null $sizeInGb
 * @property 'pending'|'completed'|'error'|'unknown'|null $state
 * @property string|null $progress
 * @property string|null $fromDiskName
 * @property string|null $fromDiskArn
 * @property string|null $fromInstanceName
 * @property string|null $fromInstanceArn
 * @property bool|null $isFromAutoSnapshot
 */
class DiskSnapshot extends Shape
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
     *     sizeInGb?: int|null,
     *     state?: 'pending'|'completed'|'error'|'unknown'|null,
     *     progress?: string|null,
     *     fromDiskName?: string|null,
     *     fromDiskArn?: string|null,
     *     fromInstanceName?: string|null,
     *     fromInstanceArn?: string|null,
     *     isFromAutoSnapshot?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
