<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $arn
 * @property string $supportCode
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property ResourceLocation $location
 * @property 'ContainerService'|'Instance'|'StaticIp'|'KeyPair'|'InstanceSnapshot'|'Domain'|'PeeredVpc'|'LoadBalancer'|'LoadBalancerTlsCertificate'|'Disk'|'DiskSnapshot'|'RelationalDatabase'|'RelationalDatabaseSnapshot'|'ExportSnapshotRecord'|'CloudFormationStackRecord'|'Alarm'|'ContactMethod'|'Distribution'|'Certificate'|'Bucket' $resourceType
 * @property list<Tag> $tags
 * @property string $blueprintId
 * @property string $blueprintName
 * @property string $bundleId
 * @property list<AddOn> $addOns
 * @property bool $isStaticIp
 * @property string $privateIpAddress
 * @property string $publicIpAddress
 * @property list<string> $ipv6Addresses
 * @property 'dualstack'|'ipv4'|'ipv6' $ipAddressType
 * @property InstanceHardware $hardware
 * @property InstanceNetworking $networking
 * @property InstanceState $state
 * @property string $username
 * @property string $sshKeyName
 * @property InstanceMetadataOptions $metadataOptions
 */
class Instance extends Shape
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
     *     blueprintId?: string,
     *     blueprintName?: string,
     *     bundleId?: string,
     *     addOns?: list<AddOn>,
     *     isStaticIp?: bool,
     *     privateIpAddress?: string,
     *     publicIpAddress?: string,
     *     ipv6Addresses?: list<string>,
     *     ipAddressType?: 'dualstack'|'ipv4'|'ipv6',
     *     hardware?: InstanceHardware,
     *     networking?: InstanceNetworking,
     *     state?: InstanceState,
     *     username?: string,
     *     sshKeyName?: string,
     *     metadataOptions?: InstanceMetadataOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
