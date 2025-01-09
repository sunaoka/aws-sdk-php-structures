<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteVpcEndpointServiceConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UnsuccessfulItemError $Error
 * @property string $ResourceId
 */
class UnsuccessfulItem extends Shape
{
    /**
     * @param array{
     *     Error?: UnsuccessfulItemError,
     *     ResourceId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
