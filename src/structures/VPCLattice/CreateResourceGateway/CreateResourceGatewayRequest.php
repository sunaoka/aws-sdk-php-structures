<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateResourceGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property 'IPV4'|'IPV6'|'DUALSTACK' $ipAddressType
 * @property string $name
 * @property list<string> $securityGroupIds
 * @property list<string> $subnetIds
 * @property array<string, string> $tags
 * @property string $vpcIdentifier
 */
class CreateResourceGatewayRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     ipAddressType?: 'IPV4'|'IPV6'|'DUALSTACK',
     *     name: string,
     *     securityGroupIds?: list<string>,
     *     subnetIds: list<string>,
     *     tags?: array<string, string>,
     *     vpcIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
