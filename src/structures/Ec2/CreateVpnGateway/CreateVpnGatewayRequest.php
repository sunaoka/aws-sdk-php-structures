<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVpnGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AvailabilityZone
 * @property 'ipsec.1' $Type
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property int $AmazonSideAsn
 * @property bool $DryRun
 */
class CreateVpnGatewayRequest extends Request
{
    /**
     * @param array{
     *     AvailabilityZone?: string,
     *     Type: 'ipsec.1',
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     AmazonSideAsn?: int,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
