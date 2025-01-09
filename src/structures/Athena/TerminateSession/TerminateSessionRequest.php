<?php

namespace Sunaoka\Aws\Structures\Athena\TerminateSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SessionId
 */
class TerminateSessionRequest extends Request
{
    /**
     * @param array{SessionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
