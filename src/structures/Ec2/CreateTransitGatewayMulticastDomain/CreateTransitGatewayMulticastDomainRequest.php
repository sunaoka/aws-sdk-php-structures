<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTransitGatewayMulticastDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayId
 * @property Shapes\CreateTransitGatewayMulticastDomainRequestOptions|null $Options
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property bool|null $DryRun
 */
class CreateTransitGatewayMulticastDomainRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayId: string,
     *     Options?: Shapes\CreateTransitGatewayMulticastDomainRequestOptions|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
