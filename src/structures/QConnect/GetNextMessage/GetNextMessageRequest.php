<?php

namespace Sunaoka\Aws\Structures\QConnect\GetNextMessage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property string $sessionId
 * @property string $nextMessageToken
 */
class GetNextMessageRequest extends Request
{
    /**
     * @param array{
     *     assistantId: string,
     *     sessionId: string,
     *     nextMessageToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
