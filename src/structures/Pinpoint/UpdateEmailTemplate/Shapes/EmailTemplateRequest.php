<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateEmailTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DefaultSubstitutions
 * @property string $HtmlPart
 * @property string $RecommenderId
 * @property string $Subject
 * @property list<MessageHeader> $Headers
 * @property array<string, string> $tags
 * @property string $TemplateDescription
 * @property string $TextPart
 */
class EmailTemplateRequest extends Shape
{
    /**
     * @param array{
     *     DefaultSubstitutions?: string,
     *     HtmlPart?: string,
     *     RecommenderId?: string,
     *     Subject?: string,
     *     Headers?: list<MessageHeader>,
     *     tags?: array<string, string>,
     *     TemplateDescription?: string,
     *     TextPart?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
