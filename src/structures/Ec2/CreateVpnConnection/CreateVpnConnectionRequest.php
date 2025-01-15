<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVpnConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CustomerGatewayId
 * @property string $Type
 * @property string|null $VpnGatewayId
 * @property string|null $TransitGatewayId
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property bool|null $DryRun
 * @property Shapes\VpnConnectionOptionsSpecification|null $Options
 */
class CreateVpnConnectionRequest extends Request
{
    /**
     * @param array{
     *     CustomerGatewayId: string,
     *     Type: string,
     *     VpnGatewayId?: string|null,
     *     TransitGatewayId?: string|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     DryRun?: bool|null,
     *     Options?: Shapes\VpnConnectionOptionsSpecification|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
