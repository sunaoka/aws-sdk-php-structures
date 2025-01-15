<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetRelationalDatabaseSnapshots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $arn
 * @property string|null $supportCode
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property ResourceLocation|null $location
 * @property 'ContainerService'|'Instance'|'StaticIp'|'KeyPair'|'InstanceSnapshot'|'Domain'|'PeeredVpc'|'LoadBalancer'|'LoadBalancerTlsCertificate'|'Disk'|'DiskSnapshot'|'RelationalDatabase'|'RelationalDatabaseSnapshot'|'ExportSnapshotRecord'|'CloudFormationStackRecord'|'Alarm'|'ContactMethod'|'Distribution'|'Certificate'|'Bucket'|null $resourceType
 * @property list<Tag>|null $tags
 * @property string|null $engine
 * @property string|null $engineVersion
 * @property int|null $sizeInGb
 * @property string|null $state
 * @property string|null $fromRelationalDatabaseName
 * @property string|null $fromRelationalDatabaseArn
 * @property string|null $fromRelationalDatabaseBundleId
 * @property string|null $fromRelationalDatabaseBlueprintId
 */
class RelationalDatabaseSnapshot extends Shape
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
     *     engine?: string|null,
     *     engineVersion?: string|null,
     *     sizeInGb?: int|null,
     *     state?: string|null,
     *     fromRelationalDatabaseName?: string|null,
     *     fromRelationalDatabaseArn?: string|null,
     *     fromRelationalDatabaseBundleId?: string|null,
     *     fromRelationalDatabaseBlueprintId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
