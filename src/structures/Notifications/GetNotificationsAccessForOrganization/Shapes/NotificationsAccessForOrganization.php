<?php

namespace Sunaoka\Aws\Structures\Notifications\GetNotificationsAccessForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|'PENDING' $accessStatus
 */
class NotificationsAccessForOrganization extends Shape
{
    /**
     * @param array{accessStatus: 'ENABLED'|'DISABLED'|'PENDING'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
