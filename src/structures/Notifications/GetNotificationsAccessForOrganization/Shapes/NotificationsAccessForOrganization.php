<?php

namespace Sunaoka\Aws\Structures\Notifications\GetNotificationsAccessForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|'PENDING'|'FAILED' $accessStatus
 */
class NotificationsAccessForOrganization extends Shape
{
    /**
     * @param array{accessStatus: 'ENABLED'|'DISABLED'|'PENDING'|'FAILED'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
