<?php

namespace Sunaoka\Aws\Structures\Ec2\UnassignPrivateNatGatewayAddress;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NatGatewayId
 * @property list<string> $PrivateIpAddresses
 * @property int<1, 4000> $MaxDrainDurationSeconds
 * @property bool $DryRun
 */
class UnassignPrivateNatGatewayAddressRequest extends Request
{
    /**
     * @param array{
     *     NatGatewayId: string,
     *     PrivateIpAddresses: list<string>,
     *     MaxDrainDurationSeconds?: int<1, 4000>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
