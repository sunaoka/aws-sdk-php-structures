<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetInAppTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property list<InAppMessageContent> $Content
 * @property string $CreationDate
 * @property array<string, string> $CustomConfig
 * @property string $LastModifiedDate
 * @property 'BOTTOM_BANNER'|'TOP_BANNER'|'OVERLAYS'|'MOBILE_FEED'|'MIDDLE_BANNER'|'CAROUSEL' $Layout
 * @property array<string, string> $tags
 * @property string $TemplateDescription
 * @property string $TemplateName
 * @property 'EMAIL'|'SMS'|'VOICE'|'PUSH'|'INAPP' $TemplateType
 * @property string $Version
 */
class InAppTemplateResponse extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     Content?: list<InAppMessageContent>,
     *     CreationDate: string,
     *     CustomConfig?: array<string, string>,
     *     LastModifiedDate: string,
     *     Layout?: 'BOTTOM_BANNER'|'TOP_BANNER'|'OVERLAYS'|'MOBILE_FEED'|'MIDDLE_BANNER'|'CAROUSEL',
     *     tags?: array<string, string>,
     *     TemplateDescription?: string,
     *     TemplateName: string,
     *     TemplateType: 'EMAIL'|'SMS'|'VOICE'|'PUSH'|'INAPP',
     *     Version?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
