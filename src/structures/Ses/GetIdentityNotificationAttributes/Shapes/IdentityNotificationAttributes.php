<?php

namespace Sunaoka\Aws\Structures\Ses\GetIdentityNotificationAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BounceTopic
 * @property string $ComplaintTopic
 * @property string $DeliveryTopic
 * @property bool $ForwardingEnabled
 * @property bool $HeadersInBounceNotificationsEnabled
 * @property bool $HeadersInComplaintNotificationsEnabled
 * @property bool $HeadersInDeliveryNotificationsEnabled
 */
class IdentityNotificationAttributes extends Shape
{
    /**
     * @param array{
     *     BounceTopic: string,
     *     ComplaintTopic: string,
     *     DeliveryTopic: string,
     *     ForwardingEnabled: bool,
     *     HeadersInBounceNotificationsEnabled?: bool,
     *     HeadersInComplaintNotificationsEnabled?: bool,
     *     HeadersInDeliveryNotificationsEnabled?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
