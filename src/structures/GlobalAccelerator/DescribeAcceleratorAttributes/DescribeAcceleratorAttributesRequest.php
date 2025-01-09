<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\DescribeAcceleratorAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceleratorArn
 */
class DescribeAcceleratorAttributesRequest extends Request
{
    /**
     * @param array{AcceleratorArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
