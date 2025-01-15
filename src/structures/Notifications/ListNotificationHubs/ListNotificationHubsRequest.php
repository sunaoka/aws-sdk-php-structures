<?php

namespace Sunaoka\Aws\Structures\Notifications\ListNotificationHubs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<3, 3>|null $maxResults
 * @property string|null $nextToken
 */
class ListNotificationHubsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<3, 3>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
