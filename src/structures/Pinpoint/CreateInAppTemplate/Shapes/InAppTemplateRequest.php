<?php

namespace Sunaoka\Aws\Structures\Pinpoint\CreateInAppTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<InAppMessageContent>|null $Content
 * @property array<string, string>|null $CustomConfig
 * @property 'BOTTOM_BANNER'|'TOP_BANNER'|'OVERLAYS'|'MOBILE_FEED'|'MIDDLE_BANNER'|'CAROUSEL'|null $Layout
 * @property array<string, string>|null $tags
 * @property string|null $TemplateDescription
 */
class InAppTemplateRequest extends Shape
{
    /**
     * @param array{
     *     Content?: list<InAppMessageContent>|null,
     *     CustomConfig?: array<string, string>|null,
     *     Layout?: 'BOTTOM_BANNER'|'TOP_BANNER'|'OVERLAYS'|'MOBILE_FEED'|'MIDDLE_BANNER'|'CAROUSEL'|null,
     *     tags?: array<string, string>|null,
     *     TemplateDescription?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
