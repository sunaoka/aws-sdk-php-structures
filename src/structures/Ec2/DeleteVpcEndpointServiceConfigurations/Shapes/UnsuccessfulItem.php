<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteVpcEndpointServiceConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UnsuccessfulItemError|null $Error
 * @property string|null $ResourceId
 */
class UnsuccessfulItem extends Shape
{
    /**
     * @param array{
     *     Error?: UnsuccessfulItemError|null,
     *     ResourceId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
