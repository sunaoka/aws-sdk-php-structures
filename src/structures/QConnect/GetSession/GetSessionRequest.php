<?php

namespace Sunaoka\Aws\Structures\QConnect\GetSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property string $sessionId
 */
class GetSessionRequest extends Request
{
    /**
     * @param array{
     *     assistantId: string,
     *     sessionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
