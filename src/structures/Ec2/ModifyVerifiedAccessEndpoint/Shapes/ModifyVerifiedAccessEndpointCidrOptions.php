<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVerifiedAccessEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ModifyVerifiedAccessEndpointPortRange>|null $PortRanges
 */
class ModifyVerifiedAccessEndpointCidrOptions extends Shape
{
    /**
     * @param array{PortRanges?: list<ModifyVerifiedAccessEndpointPortRange>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
