<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateNatGatewayAddress;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NatGatewayId
 * @property list<string> $AllocationIds
 * @property list<string> $PrivateIpAddresses
 * @property bool $DryRun
 */
class AssociateNatGatewayAddressRequest extends Request
{
    /**
     * @param array{
     *     NatGatewayId: string,
     *     AllocationIds: list<string>,
     *     PrivateIpAddresses?: list<string>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
