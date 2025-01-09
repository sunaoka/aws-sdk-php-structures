<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\DeleteCustomRoutingEndpointGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointGroupArn
 */
class DeleteCustomRoutingEndpointGroupRequest extends Request
{
    /**
     * @param array{EndpointGroupArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
