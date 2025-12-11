<?php

namespace Sunaoka\Aws\Structures\QConnect\SearchMessageTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WhatsAppMessageTemplateSourceConfigurationSummary|null $whatsApp
 */
class MessageTemplateSourceConfigurationSummary extends Shape
{
    /**
     * @param array{whatsApp?: WhatsAppMessageTemplateSourceConfigurationSummary|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
