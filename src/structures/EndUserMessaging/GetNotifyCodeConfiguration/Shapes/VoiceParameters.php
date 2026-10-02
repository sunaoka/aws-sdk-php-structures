<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\GetNotifyCodeConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $inlineTemplateBody
 * @property string|null $languageCode
 * @property string|null $voiceId
 * @property 'TEXT'|'SSML'|null $voiceMessageBodyTextType
 */
class VoiceParameters extends Shape
{
    /**
     * @param array{
     *     inlineTemplateBody?: string|null,
     *     languageCode?: string|null,
     *     voiceId?: string|null,
     *     voiceMessageBodyTextType?: 'TEXT'|'SSML'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
