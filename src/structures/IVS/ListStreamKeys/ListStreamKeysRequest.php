<?php

namespace Sunaoka\Aws\Structures\IVS\ListStreamKeys;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $channelArn
 * @property string|null $nextToken
 * @property int<1, 50>|null $maxResults
 */
class ListStreamKeysRequest extends Request
{
    /**
     * @param array{
     *     channelArn: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
