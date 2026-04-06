<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateResourceGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property 'IPV4'|'IPV6'|'DUALSTACK'|null $ipAddressType
 * @property string $name
 * @property list<string>|null $securityGroupIds
 * @property list<string> $subnetIds
 * @property array<string, string>|null $tags
 * @property string $vpcIdentifier
 */
class CreateResourceGatewayRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     ipAddressType?: 'IPV4'|'IPV6'|'DUALSTACK'|null,
     *     name: string,
     *     securityGroupIds?: list<string>|null,
     *     subnetIds: list<string>,
     *     tags?: array<string, string>|null,
     *     vpcIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
