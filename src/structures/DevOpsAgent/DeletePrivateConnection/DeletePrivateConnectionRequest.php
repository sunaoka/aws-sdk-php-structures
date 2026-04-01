<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\DeletePrivateConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class DeletePrivateConnectionRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
