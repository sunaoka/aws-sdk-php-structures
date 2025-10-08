<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\ListWhatsAppMessageTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $templateName
 * @property string|null $metaTemplateId
 * @property string|null $templateStatus
 * @property string|null $templateQualityScore
 * @property string|null $templateLanguage
 * @property string|null $templateCategory
 */
class TemplateSummary extends Shape
{
    /**
     * @param array{
     *     templateName?: string|null,
     *     metaTemplateId?: string|null,
     *     templateStatus?: string|null,
     *     templateQualityScore?: string|null,
     *     templateLanguage?: string|null,
     *     templateCategory?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
