<?php

namespace Sunaoka\Aws\Structures\Notifications\ListNotificationHubs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<3, 3> $maxResults
 * @property string $nextToken
 */
class ListNotificationHubsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<3, 3>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
