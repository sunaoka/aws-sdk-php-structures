<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetDiskSnapshots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $arn
 * @property string $supportCode
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property ResourceLocation $location
 * @property 'ContainerService'|'Instance'|'StaticIp'|'KeyPair'|'InstanceSnapshot'|'Domain'|'PeeredVpc'|'LoadBalancer'|'LoadBalancerTlsCertificate'|'Disk'|'DiskSnapshot'|'RelationalDatabase'|'RelationalDatabaseSnapshot'|'ExportSnapshotRecord'|'CloudFormationStackRecord'|'Alarm'|'ContactMethod'|'Distribution'|'Certificate'|'Bucket' $resourceType
 * @property list<Tag> $tags
 * @property int $sizeInGb
 * @property 'pending'|'completed'|'error'|'unknown' $state
 * @property string $progress
 * @property string $fromDiskName
 * @property string $fromDiskArn
 * @property string $fromInstanceName
 * @property string $fromInstanceArn
 * @property bool $isFromAutoSnapshot
 */
class DiskSnapshot extends Shape
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
     *     sizeInGb?: int,
     *     state?: 'pending'|'completed'|'error'|'unknown',
     *     progress?: string,
     *     fromDiskName?: string,
     *     fromDiskArn?: string,
     *     fromInstanceName?: string,
     *     fromInstanceArn?: string,
     *     isFromAutoSnapshot?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
