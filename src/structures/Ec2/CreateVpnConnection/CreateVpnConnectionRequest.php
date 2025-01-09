<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVpnConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CustomerGatewayId
 * @property string $Type
 * @property string $VpnGatewayId
 * @property string $TransitGatewayId
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property bool $DryRun
 * @property Shapes\VpnConnectionOptionsSpecification $Options
 */
class CreateVpnConnectionRequest extends Request
{
    /**
     * @param array{
     *     CustomerGatewayId: string,
     *     Type: string,
     *     VpnGatewayId?: string,
     *     TransitGatewayId?: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     DryRun?: bool,
     *     Options?: Shapes\VpnConnectionOptionsSpecification
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
