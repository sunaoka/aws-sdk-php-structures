<?php

namespace Sunaoka\Aws\Structures\EventBridge\DeleteConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DeleteConnectionRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
