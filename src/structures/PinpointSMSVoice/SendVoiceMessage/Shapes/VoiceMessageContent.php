<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoice\SendVoiceMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CallInstructionsMessageType|null $CallInstructionsMessage
 * @property PlainTextMessageType|null $PlainTextMessage
 * @property SSMLMessageType|null $SSMLMessage
 */
class VoiceMessageContent extends Shape
{
    /**
     * @param array{
     *     CallInstructionsMessage?: CallInstructionsMessageType|null,
     *     PlainTextMessage?: PlainTextMessageType|null,
     *     SSMLMessage?: SSMLMessageType|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
