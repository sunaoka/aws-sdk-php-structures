<?php

namespace Sunaoka\Aws\Structures\Notifications\RegisterNotificationHub;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $notificationHubRegion
 */
class RegisterNotificationHubRequest extends Request
{
    /**
     * @param array{notificationHubRegion: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
