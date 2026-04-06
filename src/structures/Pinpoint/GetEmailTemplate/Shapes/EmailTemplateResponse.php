<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetEmailTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string $CreationDate
 * @property string|null $DefaultSubstitutions
 * @property string|null $HtmlPart
 * @property string $LastModifiedDate
 * @property string|null $RecommenderId
 * @property string|null $Subject
 * @property list<MessageHeader>|null $Headers
 * @property array<string, string>|null $tags
 * @property string|null $TemplateDescription
 * @property string $TemplateName
 * @property 'EMAIL'|'SMS'|'VOICE'|'PUSH'|'INAPP' $TemplateType
 * @property string|null $TextPart
 * @property string|null $Version
 */
class EmailTemplateResponse extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     CreationDate: string,
     *     DefaultSubstitutions?: string|null,
     *     HtmlPart?: string|null,
     *     LastModifiedDate: string,
     *     RecommenderId?: string|null,
     *     Subject?: string|null,
     *     Headers?: list<MessageHeader>|null,
     *     tags?: array<string, string>|null,
     *     TemplateDescription?: string|null,
     *     TemplateName: string,
     *     TemplateType: 'EMAIL'|'SMS'|'VOICE'|'PUSH'|'INAPP',
     *     TextPart?: string|null,
     *     Version?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
