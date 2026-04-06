<?php

namespace Sunaoka\Aws\Structures\Notifications\ListManagedNotificationConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $channelIdentifier
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListManagedNotificationConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     channelIdentifier?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
