<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EMAIL' $DeliveryMethod
 * @property string|null $Subject
 * @property string $Content
 * @property 'PLAIN_TEXT' $ContentType
 * @property NotificationRecipientType $Recipient
 * @property NotificationRecipientType|null $Exclusion
 */
class SendNotificationActionDefinition extends Shape
{
    /**
     * @param array{
     *     DeliveryMethod: 'EMAIL',
     *     Subject?: string|null,
     *     Content: string,
     *     ContentType: 'PLAIN_TEXT',
     *     Recipient: NotificationRecipientType,
     *     Exclusion?: NotificationRecipientType|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
