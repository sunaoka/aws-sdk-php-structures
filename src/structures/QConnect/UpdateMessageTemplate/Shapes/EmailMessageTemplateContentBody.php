<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateMessageTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MessageTemplateBodyContentProvider $html
 * @property MessageTemplateBodyContentProvider $plainText
 */
class EmailMessageTemplateContentBody extends Shape
{
    /**
     * @param array{
     *     html?: MessageTemplateBodyContentProvider,
     *     plainText?: MessageTemplateBodyContentProvider
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
