<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVerifiedAccessEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 65535> $FromPort
 * @property int<1, 65535> $ToPort
 */
class CreateVerifiedAccessEndpointPortRange extends Shape
{
    /**
     * @param array{
     *     FromPort?: int<1, 65535>,
     *     ToPort?: int<1, 65535>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
