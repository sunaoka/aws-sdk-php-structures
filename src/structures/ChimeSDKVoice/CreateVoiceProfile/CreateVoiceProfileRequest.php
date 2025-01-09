<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\CreateVoiceProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SpeakerSearchTaskId
 */
class CreateVoiceProfileRequest extends Request
{
    /**
     * @param array{SpeakerSearchTaskId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
