<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateInAppTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<InAppMessageContent> $Content
 * @property array<string, string> $CustomConfig
 * @property 'BOTTOM_BANNER'|'TOP_BANNER'|'OVERLAYS'|'MOBILE_FEED'|'MIDDLE_BANNER'|'CAROUSEL' $Layout
 * @property array<string, string> $tags
 * @property string $TemplateDescription
 */
class InAppTemplateRequest extends Shape
{
    /**
     * @param array{
     *     Content?: list<InAppMessageContent>,
     *     CustomConfig?: array<string, string>,
     *     Layout?: 'BOTTOM_BANNER'|'TOP_BANNER'|'OVERLAYS'|'MOBILE_FEED'|'MIDDLE_BANNER'|'CAROUSEL',
     *     tags?: array<string, string>,
     *     TemplateDescription?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
