<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoice\SendVoiceMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LanguageCode
 * @property string|null $Text
 * @property string|null $VoiceId
 */
class SSMLMessageType extends Shape
{
    /**
     * @param array{
     *     LanguageCode?: string|null,
     *     Text?: string|null,
     *     VoiceId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
