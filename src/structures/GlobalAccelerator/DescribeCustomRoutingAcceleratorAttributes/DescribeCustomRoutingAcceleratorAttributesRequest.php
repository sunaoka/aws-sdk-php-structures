<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\DescribeCustomRoutingAcceleratorAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceleratorArn
 */
class DescribeCustomRoutingAcceleratorAttributesRequest extends Request
{
    /**
     * @param array{AcceleratorArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
