<?php

namespace Sunaoka\Aws\Structures\Organizations\CancelHandshake;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HandshakeId
 */
class CancelHandshakeRequest extends Request
{
    /**
     * @param array{HandshakeId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
