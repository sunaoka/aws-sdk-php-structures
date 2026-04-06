<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVerifiedAccessEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'http'|'https'|null $Protocol
 * @property int<1, 65535>|null $Port
 * @property string|null $LoadBalancerArn
 * @property list<string>|null $SubnetIds
 */
class VerifiedAccessEndpointLoadBalancerOptions extends Shape
{
    /**
     * @param array{
     *     Protocol?: 'http'|'https'|null,
     *     Port?: int<1, 65535>|null,
     *     LoadBalancerArn?: string|null,
     *     SubnetIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
