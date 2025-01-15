<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTransitGatewayMulticastDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'enable'|'disable'|null $Igmpv2Support
 * @property 'enable'|'disable'|null $StaticSourcesSupport
 * @property 'enable'|'disable'|null $AutoAcceptSharedAssociations
 */
class TransitGatewayMulticastDomainOptions extends Shape
{
    /**
     * @param array{
     *     Igmpv2Support?: 'enable'|'disable'|null,
     *     StaticSourcesSupport?: 'enable'|'disable'|null,
     *     AutoAcceptSharedAssociations?: 'enable'|'disable'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
