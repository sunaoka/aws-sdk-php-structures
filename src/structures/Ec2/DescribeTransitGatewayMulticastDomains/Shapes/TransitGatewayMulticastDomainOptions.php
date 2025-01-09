<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeTransitGatewayMulticastDomains\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'enable'|'disable' $Igmpv2Support
 * @property 'enable'|'disable' $StaticSourcesSupport
 * @property 'enable'|'disable' $AutoAcceptSharedAssociations
 */
class TransitGatewayMulticastDomainOptions extends Shape
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
