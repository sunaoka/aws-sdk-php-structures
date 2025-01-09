<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetInstanceSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $arn
 * @property string $supportCode
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property ResourceLocation $location
 * @property 'ContainerService'|'Instance'|'StaticIp'|'KeyPair'|'InstanceSnapshot'|'Domain'|'PeeredVpc'|'LoadBalancer'|'LoadBalancerTlsCertificate'|'Disk'|'DiskSnapshot'|'RelationalDatabase'|'RelationalDatabaseSnapshot'|'ExportSnapshotRecord'|'CloudFormationStackRecord'|'Alarm'|'ContactMethod'|'Distribution'|'Certificate'|'Bucket' $resourceType
 * @property list<Tag> $tags
 * @property 'pending'|'error'|'available' $state
 * @property string $progress
 * @property list<Disk> $fromAttachedDisks
 * @property string $fromInstanceName
 * @property string $fromInstanceArn
 * @property string $fromBlueprintId
 * @property string $fromBundleId
 * @property bool $isFromAutoSnapshot
 * @property int $sizeInGb
 */
class InstanceSnapshot extends Shape
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
     *     state?: 'pending'|'error'|'available',
     *     progress?: string,
     *     fromAttachedDisks?: list<Disk>,
     *     fromInstanceName?: string,
     *     fromInstanceArn?: string,
     *     fromBlueprintId?: string,
     *     fromBundleId?: string,
     *     isFromAutoSnapshot?: bool,
     *     sizeInGb?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
