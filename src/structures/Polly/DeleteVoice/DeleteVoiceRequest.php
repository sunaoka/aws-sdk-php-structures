<?php

namespace Sunaoka\Aws\Structures\Polly\DeleteVoice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VoiceId
 */
class DeleteVoiceRequest extends Request
{
    /**
     * @param array{VoiceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
