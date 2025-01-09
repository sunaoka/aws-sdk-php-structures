<?php

namespace Sunaoka\Aws\Structures\IotDataPlane\ListRetainedMessages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int<1, 200> $maxResults
 */
class ListRetainedMessagesRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int<1, 200>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
