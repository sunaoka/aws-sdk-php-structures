<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoice\SendVoiceMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CallInstructionsMessageType $CallInstructionsMessage
 * @property PlainTextMessageType $PlainTextMessage
 * @property SSMLMessageType $SSMLMessage
 */
class VoiceMessageContent extends Shape
{
    /**
     * @param array{
     *     CallInstructionsMessage?: CallInstructionsMessageType,
     *     PlainTextMessage?: PlainTextMessageType,
     *     SSMLMessage?: SSMLMessageType
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
