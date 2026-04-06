<?php

namespace Sunaoka\Aws\Structures\IVS\ListStreamKeys;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $channelArn
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 */
class ListStreamKeysRequest extends Request
{
    /**
     * @param array{
     *     channelArn: string,
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
