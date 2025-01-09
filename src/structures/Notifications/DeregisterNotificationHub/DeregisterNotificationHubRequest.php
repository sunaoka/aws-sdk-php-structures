<?php

namespace Sunaoka\Aws\Structures\Notifications\DeregisterNotificationHub;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $notificationHubRegion
 */
class DeregisterNotificationHubRequest extends Request
{
    /**
     * @param array{notificationHubRegion: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
