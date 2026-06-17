<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\CreatePrivateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $hostAddress
 * @property string $vpcId
 * @property list<string> $subnetIds
 * @property list<string>|null $securityGroupIds
 * @property 'IPV4'|'IPV6'|'DUAL_STACK'|null $ipAddressType
 * @property int|null $ipv4AddressesPerEni
 * @property list<string>|null $portRanges
 * @property string|null $certificate
 * @property 'PUBLIC'|'IN_VPC'|null $dnsResolution
 */
class ServiceManagedInput extends Shape
{
    /**
     * @param array{
     *     hostAddress: string,
     *     vpcId: string,
     *     subnetIds: list<string>,
     *     securityGroupIds?: list<string>|null,
     *     ipAddressType?: 'IPV4'|'IPV6'|'DUAL_STACK'|null,
     *     ipv4AddressesPerEni?: int|null,
     *     portRanges?: list<string>|null,
     *     certificate?: string|null,
     *     dnsResolution?: 'PUBLIC'|'IN_VPC'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
