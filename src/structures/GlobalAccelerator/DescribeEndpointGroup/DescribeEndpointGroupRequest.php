<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\DescribeEndpointGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointGroupArn
 */
class DescribeEndpointGroupRequest extends Request
{
    /**
     * @param array{EndpointGroupArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
