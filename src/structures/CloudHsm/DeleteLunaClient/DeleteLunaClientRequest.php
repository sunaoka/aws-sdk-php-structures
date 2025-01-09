<?php

namespace Sunaoka\Aws\Structures\CloudHsm\DeleteLunaClient;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientArn
 */
class DeleteLunaClientRequest extends Request
{
    /**
     * @param array{ClientArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
