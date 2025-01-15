<?php

namespace Sunaoka\Aws\Structures\Ec2\AssignPrivateNatGatewayAddress;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NatGatewayId
 * @property list<string>|null $PrivateIpAddresses
 * @property int<1, 31>|null $PrivateIpAddressCount
 * @property bool|null $DryRun
 */
class AssignPrivateNatGatewayAddressRequest extends Request
{
    /**
     * @param array{
     *     NatGatewayId: string,
     *     PrivateIpAddresses?: list<string>|null,
     *     PrivateIpAddressCount?: int<1, 31>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
