<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetSmsTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Body
 * @property string $CreationDate
 * @property string $DefaultSubstitutions
 * @property string $LastModifiedDate
 * @property string $RecommenderId
 * @property array<string, string> $tags
 * @property string $TemplateDescription
 * @property string $TemplateName
 * @property 'EMAIL'|'SMS'|'VOICE'|'PUSH'|'INAPP' $TemplateType
 * @property string $Version
 */
class SMSTemplateResponse extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     Body?: string,
     *     CreationDate: string,
     *     DefaultSubstitutions?: string,
     *     LastModifiedDate: string,
     *     RecommenderId?: string,
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
