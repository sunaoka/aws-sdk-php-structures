<?php

namespace Sunaoka\Aws\Structures\Notifications\ListManagedNotificationChannelAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $managedNotificationConfigurationArn
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListManagedNotificationChannelAssociationsRequest extends Request
{
    /**
     * @param array{
     *     managedNotificationConfigurationArn: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
