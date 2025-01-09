<?php

namespace Sunaoka\Aws\Structures\QConnect\GetNextMessage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property string $nextMessageToken
 * @property string $sessionId
 */
class GetNextMessageRequest extends Request
{
    /**
     * @param array{
     *     assistantId: string,
     *     nextMessageToken: string,
     *     sessionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
