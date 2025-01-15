<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetKeyPairs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $arn
 * @property string|null $supportCode
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property ResourceLocation|null $location
 * @property 'ContainerService'|'Instance'|'StaticIp'|'KeyPair'|'InstanceSnapshot'|'Domain'|'PeeredVpc'|'LoadBalancer'|'LoadBalancerTlsCertificate'|'Disk'|'DiskSnapshot'|'RelationalDatabase'|'RelationalDatabaseSnapshot'|'ExportSnapshotRecord'|'CloudFormationStackRecord'|'Alarm'|'ContactMethod'|'Distribution'|'Certificate'|'Bucket'|null $resourceType
 * @property list<Tag>|null $tags
 * @property string|null $fingerprint
 */
class KeyPair extends Shape
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
     *     fingerprint?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
