<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetEmailTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $CreationDate
 * @property string $DefaultSubstitutions
 * @property string $HtmlPart
 * @property string $LastModifiedDate
 * @property string $RecommenderId
 * @property string $Subject
 * @property list<MessageHeader> $Headers
 * @property array<string, string> $tags
 * @property string $TemplateDescription
 * @property string $TemplateName
 * @property 'EMAIL'|'SMS'|'VOICE'|'PUSH'|'INAPP' $TemplateType
 * @property string $TextPart
 * @property string $Version
 */
class EmailTemplateResponse extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     CreationDate: string,
     *     DefaultSubstitutions?: string,
     *     HtmlPart?: string,
     *     LastModifiedDate: string,
     *     RecommenderId?: string,
     *     Subject?: string,
     *     Headers?: list<MessageHeader>,
     *     tags?: array<string, string>,
     *     TemplateDescription?: string,
     *     TemplateName: string,
     *     TemplateType: 'EMAIL'|'SMS'|'VOICE'|'PUSH'|'INAPP',
     *     TextPart?: string,
     *     Version?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
