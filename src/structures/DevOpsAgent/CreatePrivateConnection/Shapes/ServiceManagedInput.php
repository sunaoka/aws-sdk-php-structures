<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\CreatePrivateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $hostAddress
 * @property string $vpcId
 * @property list<string> $subnetIds
 * @property list<string>|null $securityGroupIds
 * @property 'IPV4'|'IPV6'|'DUAL_STACK'|null $ipAddressType
 * @property int<1, 62>|null $ipv4AddressesPerEni
 * @property list<string>|null $portRanges
 * @property string|null $certificate
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
     *     ipv4AddressesPerEni?: int<1, 62>|null,
     *     portRanges?: list<string>|null,
     *     certificate?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
