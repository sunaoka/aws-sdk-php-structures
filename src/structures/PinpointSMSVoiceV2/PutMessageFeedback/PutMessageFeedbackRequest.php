<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\PutMessageFeedback;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MessageId
 * @property 'RECEIVED'|'FAILED' $MessageFeedbackStatus
 */
class PutMessageFeedbackRequest extends Request
{
    /**
     * @param array{
     *     MessageId: string,
     *     MessageFeedbackStatus: 'RECEIVED'|'FAILED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
