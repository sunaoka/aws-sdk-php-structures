<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateMessageTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EmailMessageTemplateContent|null $email
 * @property SMSMessageTemplateContent|null $sms
 * @property WhatsAppMessageTemplateContent|null $whatsApp
 * @property PushMessageTemplateContent|null $push
 */
class MessageTemplateContentProvider extends Shape
{
    /**
     * @param array{
     *     email?: EmailMessageTemplateContent|null,
     *     sms?: SMSMessageTemplateContent|null,
     *     whatsApp?: WhatsAppMessageTemplateContent|null,
     *     push?: PushMessageTemplateContent|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
