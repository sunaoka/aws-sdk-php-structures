<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateMessageTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $businessAccountId
 * @property string $templateId
 * @property list<string>|null $components
 */
class WhatsAppMessageTemplateSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     businessAccountId: string,
     *     templateId: string,
     *     components?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
