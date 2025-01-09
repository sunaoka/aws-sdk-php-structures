<?php

namespace Sunaoka\Aws\Structures\DirectConnect\ConfirmConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectionId
 */
class ConfirmConnectionRequest extends Request
{
    /**
     * @param array{connectionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
