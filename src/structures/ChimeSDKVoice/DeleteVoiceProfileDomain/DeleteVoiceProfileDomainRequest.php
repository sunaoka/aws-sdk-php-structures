<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\DeleteVoiceProfileDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VoiceProfileDomainId
 */
class DeleteVoiceProfileDomainRequest extends Request
{
    /**
     * @param array{VoiceProfileDomainId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
