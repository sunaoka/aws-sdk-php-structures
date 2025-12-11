<?php

namespace Sunaoka\Aws\Structures\QConnect\ListMessageTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WhatsAppMessageTemplateSourceConfiguration|null $whatsApp
 */
class MessageTemplateSourceConfiguration extends Shape
{
    /**
     * @param array{whatsApp?: WhatsAppMessageTemplateSourceConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
