<?php

namespace Sunaoka\Aws\Structures\QConnect\RenderMessageTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MessageTemplateBodyContentProvider|null $html
 * @property MessageTemplateBodyContentProvider|null $plainText
 */
class EmailMessageTemplateContentBody extends Shape
{
    /**
     * @param array{
     *     html?: MessageTemplateBodyContentProvider|null,
     *     plainText?: MessageTemplateBodyContentProvider|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
