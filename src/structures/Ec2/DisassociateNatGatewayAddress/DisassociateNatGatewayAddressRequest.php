<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateNatGatewayAddress;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NatGatewayId
 * @property list<string> $AssociationIds
 * @property int<1, 4000> $MaxDrainDurationSeconds
 * @property bool $DryRun
 */
class DisassociateNatGatewayAddressRequest extends Request
{
    /**
     * @param array{
     *     NatGatewayId: string,
     *     AssociationIds: list<string>,
     *     MaxDrainDurationSeconds?: int<1, 4000>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
