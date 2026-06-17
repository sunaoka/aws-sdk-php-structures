<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\DeletePrivateConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $privateConnectionName
 */
class DeletePrivateConnectionRequest extends Request
{
    /**
     * @param array{privateConnectionName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
