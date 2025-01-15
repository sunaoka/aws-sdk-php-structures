<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateNatGatewayAddress;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NatGatewayId
 * @property list<string> $AllocationIds
 * @property list<string>|null $PrivateIpAddresses
 * @property bool|null $DryRun
 */
class AssociateNatGatewayAddressRequest extends Request
{
    /**
     * @param array{
     *     NatGatewayId: string,
     *     AllocationIds: list<string>,
     *     PrivateIpAddresses?: list<string>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
