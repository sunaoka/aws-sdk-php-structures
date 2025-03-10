<?php

namespace Sunaoka\Aws\Structures\Artifact\PutAccountSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'SUBSCRIBED'|'NOT_SUBSCRIBED'|null $notificationSubscriptionStatus
 */
class PutAccountSettingsRequest extends Request
{
    /**
     * @param array{notificationSubscriptionStatus?: 'SUBSCRIBED'|'NOT_SUBSCRIBED'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
