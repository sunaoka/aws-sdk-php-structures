<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\UpdateVoiceProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VoiceProfileId
 * @property string $SpeakerSearchTaskId
 */
class UpdateVoiceProfileRequest extends Request
{
    /**
     * @param array{
     *     VoiceProfileId: string,
     *     SpeakerSearchTaskId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
