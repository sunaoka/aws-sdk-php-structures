<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\DeleteCustomRoutingAccelerator;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceleratorArn
 */
class DeleteCustomRoutingAcceleratorRequest extends Request
{
    /**
     * @param array{AcceleratorArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
