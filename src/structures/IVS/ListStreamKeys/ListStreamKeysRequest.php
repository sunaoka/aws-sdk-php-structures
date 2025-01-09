<?php

namespace Sunaoka\Aws\Structures\IVS\ListStreamKeys;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $channelArn
 * @property int $maxResults
 * @property string $nextToken
 */
class ListStreamKeysRequest extends Request
{
    /**
     * @param array{
     *     channelArn: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
