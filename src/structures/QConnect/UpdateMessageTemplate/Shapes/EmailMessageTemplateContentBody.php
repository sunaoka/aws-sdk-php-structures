<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateMessageTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MessageTemplateBodyContentProvider|null $plainText
 * @property MessageTemplateBodyContentProvider|null $html
 */
class EmailMessageTemplateContentBody extends Shape
{
    /**
     * @param array{
     *     plainText?: MessageTemplateBodyContentProvider|null,
     *     html?: MessageTemplateBodyContentProvider|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
