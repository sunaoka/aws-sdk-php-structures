<?php

namespace Sunaoka\Aws\Structures\IVS\ListStreamKeys;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $channelArn
 * @property int<1, 50> $maxResults
 * @property string $nextToken
 */
class ListStreamKeysRequest extends Request
{
    /**
     * @param array{
     *     channelArn: string,
     *     maxResults?: int<1, 50>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
