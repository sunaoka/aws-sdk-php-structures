<?php

namespace Sunaoka\Aws\Structures\SecurityLake\UpdateSubscriberNotification;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\NotificationConfiguration $configuration
 * @property string $subscriberId
 */
class UpdateSubscriberNotificationRequest extends Request
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
