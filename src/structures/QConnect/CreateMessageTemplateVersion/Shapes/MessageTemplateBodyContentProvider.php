<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateMessageTemplateVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $content
 */
class MessageTemplateBodyContentProvider extends Shape
{
    /**
     * @param array{content?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
