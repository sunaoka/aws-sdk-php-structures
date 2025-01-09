<?php

namespace Sunaoka\Aws\Structures\IVS\ListStreamSessions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $channelArn
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 */
class ListStreamSessionsRequest extends Request
{
    /**
     * @param array{
     *     channelArn: string,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
