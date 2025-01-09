<?php

namespace Sunaoka\Aws\Structures\Appstream\ExpireSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SessionId
 */
class ExpireSessionRequest extends Request
{
    /**
     * @param array{SessionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
