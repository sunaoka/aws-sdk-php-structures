<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetRelationalDatabaseSnapshots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $arn
 * @property string $supportCode
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property ResourceLocation $location
 * @property 'ContainerService'|'Instance'|'StaticIp'|'KeyPair'|'InstanceSnapshot'|'Domain'|'PeeredVpc'|'LoadBalancer'|'LoadBalancerTlsCertificate'|'Disk'|'DiskSnapshot'|'RelationalDatabase'|'RelationalDatabaseSnapshot'|'ExportSnapshotRecord'|'CloudFormationStackRecord'|'Alarm'|'ContactMethod'|'Distribution'|'Certificate'|'Bucket' $resourceType
 * @property list<Tag> $tags
 * @property string $engine
 * @property string $engineVersion
 * @property int $sizeInGb
 * @property string $state
 * @property string $fromRelationalDatabaseName
 * @property string $fromRelationalDatabaseArn
 * @property string $fromRelationalDatabaseBundleId
 * @property string $fromRelationalDatabaseBlueprintId
 */
class RelationalDatabaseSnapshot extends Shape
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
     *     engine?: string,
     *     engineVersion?: string,
     *     sizeInGb?: int,
     *     state?: string,
     *     fromRelationalDatabaseName?: string,
     *     fromRelationalDatabaseArn?: string,
     *     fromRelationalDatabaseBundleId?: string,
     *     fromRelationalDatabaseBlueprintId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
