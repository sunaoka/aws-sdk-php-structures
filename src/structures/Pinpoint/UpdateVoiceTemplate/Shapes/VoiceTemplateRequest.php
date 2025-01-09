<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateVoiceTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Body
 * @property string $DefaultSubstitutions
 * @property string $LanguageCode
 * @property array<string, string> $tags
 * @property string $TemplateDescription
 * @property string $VoiceId
 */
class VoiceTemplateRequest extends Shape
{
    /**
     * @param array{
     *     Body?: string,
     *     DefaultSubstitutions?: string,
     *     LanguageCode?: string,
     *     tags?: array<string, string>,
     *     TemplateDescription?: string,
     *     VoiceId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
