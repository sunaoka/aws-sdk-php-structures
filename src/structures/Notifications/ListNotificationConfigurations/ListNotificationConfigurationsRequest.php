<?php

namespace Sunaoka\Aws\Structures\Notifications\ListNotificationConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $eventRuleSource
 * @property string $channelArn
 * @property 'ACTIVE'|'PARTIALLY_ACTIVE'|'INACTIVE'|'DELETING' $status
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 */
class ListNotificationConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     eventRuleSource?: string,
     *     channelArn?: string,
     *     status?: 'ACTIVE'|'PARTIALLY_ACTIVE'|'INACTIVE'|'DELETING',
     *     maxResults?: int<1, 100>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
