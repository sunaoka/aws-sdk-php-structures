<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateMessageTemplateMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MessageTemplateBodyContentProvider $plainText
 */
class SMSMessageTemplateContentBody extends Shape
{
    /**
     * @param array{plainText?: MessageTemplateBodyContentProvider} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
