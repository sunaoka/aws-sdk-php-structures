<?php

namespace Sunaoka\Aws\Structures\CloudHsm\DeleteHsm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HsmArn
 */
class DeleteHsmRequest extends Request
{
    /**
     * @param array{HsmArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
