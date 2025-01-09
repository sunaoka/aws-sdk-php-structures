<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoice\SendVoiceMessage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CallerId
 * @property string $ConfigurationSetName
 * @property Shapes\VoiceMessageContent $Content
 * @property string $DestinationPhoneNumber
 * @property string $OriginationPhoneNumber
 */
class SendVoiceMessageRequest extends Request
{
    /**
     * @param array{
     *     CallerId?: string,
     *     ConfigurationSetName?: string,
     *     Content?: Shapes\VoiceMessageContent,
     *     DestinationPhoneNumber?: string,
     *     OriginationPhoneNumber?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
