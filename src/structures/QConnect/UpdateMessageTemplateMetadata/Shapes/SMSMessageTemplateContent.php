<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateMessageTemplateMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SMSMessageTemplateContentBody|null $body
 */
class SMSMessageTemplateContent extends Shape
{
    /**
     * @param array{body?: SMSMessageTemplateContentBody|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
