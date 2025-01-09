<?php

namespace Sunaoka\Aws\Structures\Ec2\UnassignPrivateNatGatewayAddress;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NatGatewayId
 * @property list<string> $PrivateIpAddresses
 * @property int $MaxDrainDurationSeconds
 * @property bool $DryRun
 */
class UnassignPrivateNatGatewayAddressRequest extends Request
{
    /**
     * @param array{
     *     NatGatewayId: string,
     *     PrivateIpAddresses: list<string>,
     *     MaxDrainDurationSeconds?: int,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
