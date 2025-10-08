<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\ListVpcEndpointAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VpcEndpointAssociationArn
 */
class VpcEndpointAssociationMetadata extends Shape
{
    /**
     * @param array{VpcEndpointAssociationArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
