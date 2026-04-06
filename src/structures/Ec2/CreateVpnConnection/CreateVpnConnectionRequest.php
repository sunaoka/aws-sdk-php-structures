<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVpnConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CustomerGatewayId
 * @property string $Type
 * @property string|null $VpnGatewayId
 * @property string|null $TransitGatewayId
 * @property bool|null $DryRun
 * @property Shapes\VpnConnectionOptionsSpecification|null $Options
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 */
class CreateVpnConnectionRequest extends Request
{
    /**
     * @param array{
     *     CustomerGatewayId: string,
     *     Type: string,
     *     VpnGatewayId?: string|null,
     *     TransitGatewayId?: string|null,
     *     DryRun?: bool|null,
     *     Options?: Shapes\VpnConnectionOptionsSpecification|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
