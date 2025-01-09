<?php

namespace Sunaoka\Aws\Structures\SecurityLake\CreateSubscriberNotification;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\NotificationConfiguration $configuration
 * @property string $subscriberId
 */
class CreateSubscriberNotificationRequest extends Request
{
    /**
     * @param array{
     *     configuration: Shapes\NotificationConfiguration,
     *     subscriberId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
