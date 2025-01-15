<?php

namespace Sunaoka\Aws\Structures\Ses\GetIdentityNotificationAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BounceTopic
 * @property string $ComplaintTopic
 * @property string $DeliveryTopic
 * @property bool $ForwardingEnabled
 * @property bool|null $HeadersInBounceNotificationsEnabled
 * @property bool|null $HeadersInComplaintNotificationsEnabled
 * @property bool|null $HeadersInDeliveryNotificationsEnabled
 */
class IdentityNotificationAttributes extends Shape
{
    /**
     * @param array{
     *     BounceTopic: string,
     *     ComplaintTopic: string,
     *     DeliveryTopic: string,
     *     ForwardingEnabled: bool,
     *     HeadersInBounceNotificationsEnabled?: bool|null,
     *     HeadersInComplaintNotificationsEnabled?: bool|null,
     *     HeadersInDeliveryNotificationsEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
