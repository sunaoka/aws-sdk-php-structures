<?php

namespace Sunaoka\Aws\Structures\Notifications\ListNotificationConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $eventRuleSource
 * @property string|null $channelArn
 * @property 'ACTIVE'|'PARTIALLY_ACTIVE'|'INACTIVE'|'DELETING'|null $status
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListNotificationConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     eventRuleSource?: string|null,
     *     channelArn?: string|null,
     *     status?: 'ACTIVE'|'PARTIALLY_ACTIVE'|'INACTIVE'|'DELETING'|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
