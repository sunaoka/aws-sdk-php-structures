<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetInstanceSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $arn
 * @property string|null $supportCode
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property ResourceLocation|null $location
 * @property 'ContainerService'|'Instance'|'StaticIp'|'KeyPair'|'InstanceSnapshot'|'Domain'|'PeeredVpc'|'LoadBalancer'|'LoadBalancerTlsCertificate'|'Disk'|'DiskSnapshot'|'RelationalDatabase'|'RelationalDatabaseSnapshot'|'ExportSnapshotRecord'|'CloudFormationStackRecord'|'Alarm'|'ContactMethod'|'Distribution'|'Certificate'|'Bucket'|null $resourceType
 * @property list<Tag>|null $tags
 * @property 'pending'|'error'|'available'|null $state
 * @property string|null $progress
 * @property list<Disk>|null $fromAttachedDisks
 * @property string|null $fromInstanceName
 * @property string|null $fromInstanceArn
 * @property string|null $fromBlueprintId
 * @property string|null $fromBundleId
 * @property bool|null $isFromAutoSnapshot
 * @property int|null $sizeInGb
 */
class InstanceSnapshot extends Shape
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
     *     state?: 'pending'|'error'|'available'|null,
     *     progress?: string|null,
     *     fromAttachedDisks?: list<Disk>|null,
     *     fromInstanceName?: string|null,
     *     fromInstanceArn?: string|null,
     *     fromBlueprintId?: string|null,
     *     fromBundleId?: string|null,
     *     isFromAutoSnapshot?: bool|null,
     *     sizeInGb?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
