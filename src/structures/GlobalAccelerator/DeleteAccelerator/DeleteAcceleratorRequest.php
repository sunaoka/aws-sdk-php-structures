<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\DeleteAccelerator;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceleratorArn
 */
class DeleteAcceleratorRequest extends Request
{
    /**
     * @param array{AcceleratorArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
