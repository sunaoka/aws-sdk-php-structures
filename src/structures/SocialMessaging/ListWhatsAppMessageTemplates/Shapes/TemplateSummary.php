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
 * @property string|null $templateSource
 * @property string|null $correctCategory
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
     *     templateCategory?: string|null,
     *     templateSource?: string|null,
     *     correctCategory?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
