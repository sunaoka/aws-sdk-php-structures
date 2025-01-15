<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVerifiedAccessEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 65535>|null $FromPort
 * @property int<1, 65535>|null $ToPort
 */
class ModifyVerifiedAccessEndpointPortRange extends Shape
{
    /**
     * @param array{
     *     FromPort?: int<1, 65535>|null,
     *     ToPort?: int<1, 65535>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
