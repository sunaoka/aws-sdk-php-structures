<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateNatGatewayAddress;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NatGatewayId
 * @property list<string> $AssociationIds
 * @property int<1, 4000>|null $MaxDrainDurationSeconds
 * @property bool|null $DryRun
 */
class DisassociateNatGatewayAddressRequest extends Request
{
    /**
     * @param array{
     *     NatGatewayId: string,
     *     AssociationIds: list<string>,
     *     MaxDrainDurationSeconds?: int<1, 4000>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
