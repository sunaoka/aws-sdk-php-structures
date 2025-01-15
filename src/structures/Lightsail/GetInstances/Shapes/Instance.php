<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $arn
 * @property string|null $supportCode
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property ResourceLocation|null $location
 * @property 'ContainerService'|'Instance'|'StaticIp'|'KeyPair'|'InstanceSnapshot'|'Domain'|'PeeredVpc'|'LoadBalancer'|'LoadBalancerTlsCertificate'|'Disk'|'DiskSnapshot'|'RelationalDatabase'|'RelationalDatabaseSnapshot'|'ExportSnapshotRecord'|'CloudFormationStackRecord'|'Alarm'|'ContactMethod'|'Distribution'|'Certificate'|'Bucket'|null $resourceType
 * @property list<Tag>|null $tags
 * @property string|null $blueprintId
 * @property string|null $blueprintName
 * @property string|null $bundleId
 * @property list<AddOn>|null $addOns
 * @property bool|null $isStaticIp
 * @property string|null $privateIpAddress
 * @property string|null $publicIpAddress
 * @property list<string>|null $ipv6Addresses
 * @property 'dualstack'|'ipv4'|'ipv6'|null $ipAddressType
 * @property InstanceHardware|null $hardware
 * @property InstanceNetworking|null $networking
 * @property InstanceState|null $state
 * @property string|null $username
 * @property string|null $sshKeyName
 * @property InstanceMetadataOptions|null $metadataOptions
 */
class Instance extends Shape
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
     *     blueprintId?: string|null,
     *     blueprintName?: string|null,
     *     bundleId?: string|null,
     *     addOns?: list<AddOn>|null,
     *     isStaticIp?: bool|null,
     *     privateIpAddress?: string|null,
     *     publicIpAddress?: string|null,
     *     ipv6Addresses?: list<string>|null,
     *     ipAddressType?: 'dualstack'|'ipv4'|'ipv6'|null,
     *     hardware?: InstanceHardware|null,
     *     networking?: InstanceNetworking|null,
     *     state?: InstanceState|null,
     *     username?: string|null,
     *     sshKeyName?: string|null,
     *     metadataOptions?: InstanceMetadataOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
