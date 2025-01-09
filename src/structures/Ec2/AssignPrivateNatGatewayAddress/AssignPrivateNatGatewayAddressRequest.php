<?php

namespace Sunaoka\Aws\Structures\Ec2\AssignPrivateNatGatewayAddress;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NatGatewayId
 * @property list<string> $PrivateIpAddresses
 * @property int<1, 31> $PrivateIpAddressCount
 * @property bool $DryRun
 */
class AssignPrivateNatGatewayAddressRequest extends Request
{
    /**
     * @param array{
     *     NatGatewayId: string,
     *     PrivateIpAddresses?: list<string>,
     *     PrivateIpAddressCount?: int<1, 31>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
