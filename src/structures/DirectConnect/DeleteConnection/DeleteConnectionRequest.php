<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DeleteConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectionId
 */
class DeleteConnectionRequest extends Request
{
    /**
     * @param array{connectionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
