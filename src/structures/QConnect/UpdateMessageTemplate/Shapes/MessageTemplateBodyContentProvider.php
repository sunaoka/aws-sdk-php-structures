<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateMessageTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $content
 */
class MessageTemplateBodyContentProvider extends Shape
{
    /**
     * @param array{content?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
