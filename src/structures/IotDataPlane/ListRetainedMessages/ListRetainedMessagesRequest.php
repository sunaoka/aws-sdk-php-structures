<?php

namespace Sunaoka\Aws\Structures\IotDataPlane\ListRetainedMessages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 200>|null $maxResults
 */
class ListRetainedMessagesRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<1, 200>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
