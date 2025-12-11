<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateMessageTemplateMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $businessAccountId
 * @property string $templateId
 * @property string|null $name
 * @property string|null $language
 * @property list<string>|null $components
 * @property 'VALID'|'INVALID'|'REJECTED'|null $status
 * @property string|null $statusReason
 */
class WhatsAppMessageTemplateSourceConfigurationSummary extends Shape
{
    /**
     * @param array{
     *     businessAccountId: string,
     *     templateId: string,
     *     name?: string|null,
     *     language?: string|null,
     *     components?: list<string>|null,
     *     status?: 'VALID'|'INVALID'|'REJECTED'|null,
     *     statusReason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
