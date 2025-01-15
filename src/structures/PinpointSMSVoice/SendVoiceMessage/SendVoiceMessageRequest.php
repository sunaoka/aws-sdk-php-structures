<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoice\SendVoiceMessage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CallerId
 * @property string|null $ConfigurationSetName
 * @property Shapes\VoiceMessageContent|null $Content
 * @property string|null $DestinationPhoneNumber
 * @property string|null $OriginationPhoneNumber
 */
class SendVoiceMessageRequest extends Request
{
    /**
     * @param array{
     *     CallerId?: string|null,
     *     ConfigurationSetName?: string|null,
     *     Content?: Shapes\VoiceMessageContent|null,
     *     DestinationPhoneNumber?: string|null,
     *     OriginationPhoneNumber?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
