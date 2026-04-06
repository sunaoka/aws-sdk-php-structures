<?php

namespace Sunaoka\Aws\Structures\QConnect\ListSpans;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property string $sessionId
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListSpansRequest extends Request
{
    /**
     * @param array{
     *     assistantId: string,
     *     sessionId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
