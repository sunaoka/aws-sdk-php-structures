<?php

namespace Sunaoka\Aws\Structures\Pinpoint\CreateVoiceTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Body
 * @property string|null $DefaultSubstitutions
 * @property string|null $LanguageCode
 * @property array<string, string>|null $tags
 * @property string|null $TemplateDescription
 * @property string|null $VoiceId
 */
class VoiceTemplateRequest extends Shape
{
    /**
     * @param array{
     *     Body?: string|null,
     *     DefaultSubstitutions?: string|null,
     *     LanguageCode?: string|null,
     *     tags?: array<string, string>|null,
     *     TemplateDescription?: string|null,
     *     VoiceId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
