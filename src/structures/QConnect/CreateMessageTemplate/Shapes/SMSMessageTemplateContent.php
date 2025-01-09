<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateMessageTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SMSMessageTemplateContentBody $body
 */
class SMSMessageTemplateContent extends Shape
{
    /**
     * @param array{body?: SMSMessageTemplateContentBody} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
