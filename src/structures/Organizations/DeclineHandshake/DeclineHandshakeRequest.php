<?php

namespace Sunaoka\Aws\Structures\Organizations\DeclineHandshake;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HandshakeId
 */
class DeclineHandshakeRequest extends Request
{
    /**
     * @param array{HandshakeId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
