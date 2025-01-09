<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\ListMLInputChannels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int<1, 100> $maxResults
 * @property string $membershipIdentifier
 */
class ListMLInputChannelsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int<1, 100>,
     *     membershipIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
