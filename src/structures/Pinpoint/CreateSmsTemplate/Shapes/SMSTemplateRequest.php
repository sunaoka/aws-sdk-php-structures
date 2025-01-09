<?php

namespace Sunaoka\Aws\Structures\Pinpoint\CreateSmsTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Body
 * @property string $DefaultSubstitutions
 * @property string $RecommenderId
 * @property array<string, string> $tags
 * @property string $TemplateDescription
 */
class SMSTemplateRequest extends Shape
{
    /**
     * @param array{
     *     Body?: string,
     *     DefaultSubstitutions?: string,
     *     RecommenderId?: string,
     *     tags?: array<string, string>,
     *     TemplateDescription?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
