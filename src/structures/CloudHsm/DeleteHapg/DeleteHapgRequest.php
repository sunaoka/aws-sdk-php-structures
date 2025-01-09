<?php

namespace Sunaoka\Aws\Structures\CloudHsm\DeleteHapg;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HapgArn
 */
class DeleteHapgRequest extends Request
{
    /**
     * @param array{HapgArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
