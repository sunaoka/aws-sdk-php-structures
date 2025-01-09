<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\DeleteVoiceProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VoiceProfileId
 */
class DeleteVoiceProfileRequest extends Request
{
    /**
     * @param array{VoiceProfileId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
