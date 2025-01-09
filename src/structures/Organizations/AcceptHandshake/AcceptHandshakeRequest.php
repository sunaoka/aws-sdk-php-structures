<?php

namespace Sunaoka\Aws\Structures\Organizations\AcceptHandshake;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HandshakeId
 */
class AcceptHandshakeRequest extends Request
{
    /**
     * @param array{HandshakeId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
