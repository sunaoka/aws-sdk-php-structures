<?php

namespace Sunaoka\Aws\Structures\Pinpoint\CreateEmailTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DefaultSubstitutions
 * @property string|null $HtmlPart
 * @property string|null $RecommenderId
 * @property string|null $Subject
 * @property list<MessageHeader>|null $Headers
 * @property array<string, string>|null $tags
 * @property string|null $TemplateDescription
 * @property string|null $TextPart
 */
class EmailTemplateRequest extends Shape
{
    /**
     * @param array{
     *     DefaultSubstitutions?: string|null,
     *     HtmlPart?: string|null,
     *     RecommenderId?: string|null,
     *     Subject?: string|null,
     *     Headers?: list<MessageHeader>|null,
     *     tags?: array<string, string>|null,
     *     TemplateDescription?: string|null,
     *     TextPart?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
