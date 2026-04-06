<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVpnConcentrator;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ipsec.1' $Type
 * @property string|null $TransitGatewayId
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property bool|null $DryRun
 */
class CreateVpnConcentratorRequest extends Request
{
    /**
     * @param array{
     *     Type: 'ipsec.1',
     *     TransitGatewayId?: string|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
