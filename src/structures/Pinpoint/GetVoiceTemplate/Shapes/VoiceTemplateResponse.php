<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetVoiceTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Body
 * @property string $CreationDate
 * @property string $DefaultSubstitutions
 * @property string $LanguageCode
 * @property string $LastModifiedDate
 * @property array<string, string> $tags
 * @property string $TemplateDescription
 * @property string $TemplateName
 * @property 'EMAIL'|'SMS'|'VOICE'|'PUSH'|'INAPP' $TemplateType
 * @property string $Version
 * @property string $VoiceId
 */
class VoiceTemplateResponse extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     Body?: string,
     *     CreationDate: string,
     *     DefaultSubstitutions?: string,
     *     LanguageCode?: string,
     *     LastModifiedDate: string,
     *     tags?: array<string, string>,
     *     TemplateDescription?: string,
     *     TemplateName: string,
     *     TemplateType: 'EMAIL'|'SMS'|'VOICE'|'PUSH'|'INAPP',
     *     Version?: string,
     *     VoiceId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
