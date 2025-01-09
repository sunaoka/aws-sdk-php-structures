<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoice\SendVoiceMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LanguageCode
 * @property string $Text
 * @property string $VoiceId
 */
class PlainTextMessageType extends Shape
{
    /**
     * @param array{
     *     LanguageCode?: string,
     *     Text?: string,
     *     VoiceId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
