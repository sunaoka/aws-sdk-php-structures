<?php

namespace Sunaoka\Aws\Structures\IVS\ListStreamSessions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $channelArn
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListStreamSessionsRequest extends Request
{
    /**
     * @param array{
     *     channelArn: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
