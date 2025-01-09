<?php

namespace Sunaoka\Aws\Structures\SecurityLake\DeleteSubscriberNotification;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $subscriberId
 */
class DeleteSubscriberNotificationRequest extends Request
{
    /**
     * @param array{subscriberId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
