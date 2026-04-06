<?php

namespace Sunaoka\Aws\Structures\Artifact\PutAccountSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SUBSCRIBED'|'NOT_SUBSCRIBED'|null $notificationSubscriptionStatus
 */
class AccountSettings extends Shape
{
    /**
     * @param array{notificationSubscriptionStatus?: 'SUBSCRIBED'|'NOT_SUBSCRIBED'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
