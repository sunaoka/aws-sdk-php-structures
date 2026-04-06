<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateMessageTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EmailMessageTemplateContent|null $email
 * @property SMSMessageTemplateContent|null $sms
 */
class MessageTemplateContentProvider extends Shape
{
    /**
     * @param array{
     *     email?: EmailMessageTemplateContent|null,
     *     sms?: SMSMessageTemplateContent|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
