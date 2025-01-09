<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateMessageTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EmailMessageTemplateContent $email
 * @property SMSMessageTemplateContent $sms
 */
class MessageTemplateContentProvider extends Shape
{
    /**
     * @param array{
     *     email?: EmailMessageTemplateContent,
     *     sms?: SMSMessageTemplateContent
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
