<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetSmsTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $Body
 * @property string $CreationDate
 * @property string|null $DefaultSubstitutions
 * @property string $LastModifiedDate
 * @property string|null $RecommenderId
 * @property array<string, string>|null $tags
 * @property string|null $TemplateDescription
 * @property string $TemplateName
 * @property 'EMAIL'|'SMS'|'VOICE'|'PUSH'|'INAPP' $TemplateType
 * @property string|null $Version
 */
class SMSTemplateResponse extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Body?: string|null,
     *     CreationDate: string,
     *     DefaultSubstitutions?: string|null,
     *     LastModifiedDate: string,
     *     RecommenderId?: string|null,
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
