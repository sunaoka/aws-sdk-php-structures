<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVerifiedAccessEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $SubnetIds
 * @property 'http'|'https'|null $Protocol
 * @property int<1, 65535>|null $Port
 */
class ModifyVerifiedAccessEndpointLoadBalancerOptions extends Shape
{
    /**
     * @param array{
     *     SubnetIds?: list<string>|null,
     *     Protocol?: 'http'|'https'|null,
     *     Port?: int<1, 65535>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
