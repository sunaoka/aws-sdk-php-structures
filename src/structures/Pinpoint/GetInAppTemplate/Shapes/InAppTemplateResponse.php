<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetInAppTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property list<InAppMessageContent>|null $Content
 * @property string $CreationDate
 * @property array<string, string>|null $CustomConfig
 * @property string $LastModifiedDate
 * @property 'BOTTOM_BANNER'|'TOP_BANNER'|'OVERLAYS'|'MOBILE_FEED'|'MIDDLE_BANNER'|'CAROUSEL'|null $Layout
 * @property array<string, string>|null $tags
 * @property string|null $TemplateDescription
 * @property string $TemplateName
 * @property 'EMAIL'|'SMS'|'VOICE'|'PUSH'|'INAPP' $TemplateType
 * @property string|null $Version
 */
class InAppTemplateResponse extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Content?: list<InAppMessageContent>|null,
     *     CreationDate: string,
     *     CustomConfig?: array<string, string>|null,
     *     LastModifiedDate: string,
     *     Layout?: 'BOTTOM_BANNER'|'TOP_BANNER'|'OVERLAYS'|'MOBILE_FEED'|'MIDDLE_BANNER'|'CAROUSEL'|null,
     *     tags?: array<string, string>|null,
     *     TemplateDescription?: string|null,
     *     TemplateName: string,
     *     TemplateType: 'EMAIL'|'SMS'|'VOICE'|'PUSH'|'INAPP',
     *     Version?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
