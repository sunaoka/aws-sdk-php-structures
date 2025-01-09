<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\DescribeAccelerator;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceleratorArn
 */
class DescribeAcceleratorRequest extends Request
{
    /**
     * @param array{AcceleratorArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
