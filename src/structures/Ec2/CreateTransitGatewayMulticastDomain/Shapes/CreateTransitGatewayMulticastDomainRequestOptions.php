<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTransitGatewayMulticastDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'enable'|'disable' $Igmpv2Support
 * @property 'enable'|'disable' $StaticSourcesSupport
 * @property 'enable'|'disable' $AutoAcceptSharedAssociations
 */
class CreateTransitGatewayMulticastDomainRequestOptions extends Shape
{
    /**
     * @param array{
     *     Igmpv2Support?: 'enable'|'disable',
     *     StaticSourcesSupport?: 'enable'|'disable',
     *     AutoAcceptSharedAssociations?: 'enable'|'disable'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
