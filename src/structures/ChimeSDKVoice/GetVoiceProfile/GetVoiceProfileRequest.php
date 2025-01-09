<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\GetVoiceProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VoiceProfileId
 */
class GetVoiceProfileRequest extends Request
{
    /**
     * @param array{VoiceProfileId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
