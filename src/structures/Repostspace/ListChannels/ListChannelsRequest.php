<?php

namespace Sunaoka\Aws\Structures\Repostspace\ListChannels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceId
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListChannelsRequest extends Request
{
    /**
     * @param array{
     *     spaceId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
