<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTransitGatewayMulticastDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayId
 * @property Shapes\CreateTransitGatewayMulticastDomainRequestOptions $Options
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property bool $DryRun
 */
class CreateTransitGatewayMulticastDomainRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayId: string,
     *     Options?: Shapes\CreateTransitGatewayMulticastDomainRequestOptions,
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
