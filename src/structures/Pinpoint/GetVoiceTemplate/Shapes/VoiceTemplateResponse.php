<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetVoiceTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $Body
 * @property string $CreationDate
 * @property string|null $DefaultSubstitutions
 * @property string|null $LanguageCode
 * @property string $LastModifiedDate
 * @property array<string, string>|null $tags
 * @property string|null $TemplateDescription
 * @property string $TemplateName
 * @property 'EMAIL'|'SMS'|'VOICE'|'PUSH'|'INAPP' $TemplateType
 * @property string|null $Version
 * @property string|null $VoiceId
 */
class VoiceTemplateResponse extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Body?: string|null,
     *     CreationDate: string,
     *     DefaultSubstitutions?: string|null,
     *     LanguageCode?: string|null,
     *     LastModifiedDate: string,
     *     tags?: array<string, string>|null,
     *     TemplateDescription?: string|null,
     *     TemplateName: string,
     *     TemplateType: 'EMAIL'|'SMS'|'VOICE'|'PUSH'|'INAPP',
     *     Version?: string|null,
     *     VoiceId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
