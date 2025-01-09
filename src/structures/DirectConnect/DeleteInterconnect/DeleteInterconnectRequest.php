<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DeleteInterconnect;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $interconnectId
 */
class DeleteInterconnectRequest extends Request
{
    /**
     * @param array{interconnectId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
