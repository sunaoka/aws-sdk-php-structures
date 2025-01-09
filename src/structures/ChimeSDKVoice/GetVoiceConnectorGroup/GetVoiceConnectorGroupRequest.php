<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\GetVoiceConnectorGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VoiceConnectorGroupId
 */
class GetVoiceConnectorGroupRequest extends Request
{
    /**
     * @param array{VoiceConnectorGroupId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
