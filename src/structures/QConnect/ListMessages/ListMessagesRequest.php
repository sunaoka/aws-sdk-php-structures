<?php

namespace Sunaoka\Aws\Structures\QConnect\ListMessages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property int $maxResults
 * @property string $nextToken
 * @property string $sessionId
 */
class ListMessagesRequest extends Request
{
    /**
     * @param array{
     *     assistantId: string,
     *     maxResults?: int,
     *     nextToken?: string,
     *     sessionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
