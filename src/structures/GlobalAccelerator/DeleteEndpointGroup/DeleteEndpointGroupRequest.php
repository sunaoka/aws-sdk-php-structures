<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\DeleteEndpointGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointGroupArn
 */
class DeleteEndpointGroupRequest extends Request
{
    /**
     * @param array{EndpointGroupArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
