<?php

namespace Sunaoka\Aws\Structures\Lightsail\SetIpAddressType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ContainerService'|'Instance'|'StaticIp'|'KeyPair'|'InstanceSnapshot'|'Domain'|'PeeredVpc'|'LoadBalancer'|'LoadBalancerTlsCertificate'|'Disk'|'DiskSnapshot'|'RelationalDatabase'|'RelationalDatabaseSnapshot'|'ExportSnapshotRecord'|'CloudFormationStackRecord'|'Alarm'|'ContactMethod'|'Distribution'|'Certificate'|'Bucket' $resourceType
 * @property string $resourceName
 * @property 'dualstack'|'ipv4' $ipAddressType
 */
class SetIpAddressTypeRequest extends Request
{
    /**
     * @param array{
     *     resourceType: 'ContainerService'|'Instance'|'StaticIp'|'KeyPair'|'InstanceSnapshot'|'Domain'|'PeeredVpc'|'LoadBalancer'|'LoadBalancerTlsCertificate'|'Disk'|'DiskSnapshot'|'RelationalDatabase'|'RelationalDatabaseSnapshot'|'ExportSnapshotRecord'|'CloudFormationStackRecord'|'Alarm'|'ContactMethod'|'Distribution'|'Certificate'|'Bucket',
     *     resourceName: string,
     *     ipAddressType: 'dualstack'|'ipv4'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
