<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateResourceGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $name
 * @property string|null $vpcIdentifier
 * @property list<string>|null $subnetIds
 * @property list<string>|null $securityGroupIds
 * @property 'IPV4'|'IPV6'|'DUALSTACK'|null $ipAddressType
 * @property int<1, 62>|null $ipv4AddressesPerEni
 * @property array<string, string>|null $tags
 */
class CreateResourceGatewayRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     name: string,
     *     vpcIdentifier?: string|null,
     *     subnetIds?: list<string>|null,
     *     securityGroupIds?: list<string>|null,
     *     ipAddressType?: 'IPV4'|'IPV6'|'DUALSTACK'|null,
     *     ipv4AddressesPerEni?: int<1, 62>|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
