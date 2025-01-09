<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\DescribeCustomRoutingAccelerator;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceleratorArn
 */
class DescribeCustomRoutingAcceleratorRequest extends Request
{
    /**
     * @param array{AcceleratorArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
