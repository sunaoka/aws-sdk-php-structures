<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateNatGatewayAddress;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NatGatewayId
 * @property list<string> $AssociationIds
 * @property int $MaxDrainDurationSeconds
 * @property bool $DryRun
 */
class DisassociateNatGatewayAddressRequest extends Request
{
    /**
     * @param array{
     *     NatGatewayId: string,
     *     AssociationIds: list<string>,
     *     MaxDrainDurationSeconds?: int,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
