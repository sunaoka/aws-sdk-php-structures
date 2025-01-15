<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateMessageTemplateMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MessageTemplateBodyContentProvider|null $plainText
 */
class SMSMessageTemplateContentBody extends Shape
{
    /**
     * @param array{plainText?: MessageTemplateBodyContentProvider|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
