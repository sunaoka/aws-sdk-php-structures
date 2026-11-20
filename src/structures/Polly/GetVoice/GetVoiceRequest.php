<?php

namespace Sunaoka\Aws\Structures\Polly\GetVoice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VoiceId
 */
class GetVoiceRequest extends Request
{
    /**
     * @param array{VoiceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
