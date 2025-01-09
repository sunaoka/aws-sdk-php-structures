<?php

namespace Sunaoka\Aws\Structures\Connect\CreateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EMAIL' $DeliveryMethod
 * @property string $Subject
 * @property string $Content
 * @property 'PLAIN_TEXT' $ContentType
 * @property NotificationRecipientType $Recipient
 */
class SendNotificationActionDefinition extends Shape
{
    /**
     * @param array{
     *     DeliveryMethod: 'EMAIL',
     *     Subject?: string,
     *     Content: string,
     *     ContentType: 'PLAIN_TEXT',
     *     Recipient: NotificationRecipientType
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
