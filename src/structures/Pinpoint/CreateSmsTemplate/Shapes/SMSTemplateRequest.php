<?php

namespace Sunaoka\Aws\Structures\Pinpoint\CreateSmsTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Body
 * @property string|null $DefaultSubstitutions
 * @property string|null $RecommenderId
 * @property array<string, string>|null $tags
 * @property string|null $TemplateDescription
 */
class SMSTemplateRequest extends Shape
{
    /**
     * @param array{
     *     Body?: string|null,
     *     DefaultSubstitutions?: string|null,
     *     RecommenderId?: string|null,
     *     tags?: array<string, string>|null,
     *     TemplateDescription?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
