<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetContactMethods\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $contactEndpoint
 * @property 'PendingVerification'|'Valid'|'Invalid'|null $status
 * @property 'Email'|'SMS'|null $protocol
 * @property string|null $name
 * @property string|null $arn
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property ResourceLocation|null $location
 * @property 'ContainerService'|'Instance'|'StaticIp'|'KeyPair'|'InstanceSnapshot'|'Domain'|'PeeredVpc'|'LoadBalancer'|'LoadBalancerTlsCertificate'|'Disk'|'DiskSnapshot'|'RelationalDatabase'|'RelationalDatabaseSnapshot'|'ExportSnapshotRecord'|'CloudFormationStackRecord'|'Alarm'|'ContactMethod'|'Distribution'|'Certificate'|'Bucket'|null $resourceType
 * @property string|null $supportCode
 */
class ContactMethod extends Shape
{
    /**
     * @param array{
     *     contactEndpoint?: string|null,
     *     status?: 'PendingVerification'|'Valid'|'Invalid'|null,
     *     protocol?: 'Email'|'SMS'|null,
     *     name?: string|null,
     *     arn?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     location?: ResourceLocation|null,
     *     resourceType?: 'ContainerService'|'Instance'|'StaticIp'|'KeyPair'|'InstanceSnapshot'|'Domain'|'PeeredVpc'|'LoadBalancer'|'LoadBalancerTlsCertificate'|'Disk'|'DiskSnapshot'|'RelationalDatabase'|'RelationalDatabaseSnapshot'|'ExportSnapshotRecord'|'CloudFormationStackRecord'|'Alarm'|'ContactMethod'|'Distribution'|'Certificate'|'Bucket'|null,
     *     supportCode?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
