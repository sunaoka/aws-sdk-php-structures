<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVpnGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AvailabilityZone
 * @property 'ipsec.1' $Type
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property int|null $AmazonSideAsn
 * @property bool|null $DryRun
 */
class CreateVpnGatewayRequest extends Request
{
    /**
     * @param array{
     *     AvailabilityZone?: string|null,
     *     Type: 'ipsec.1',
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     AmazonSideAsn?: int|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
