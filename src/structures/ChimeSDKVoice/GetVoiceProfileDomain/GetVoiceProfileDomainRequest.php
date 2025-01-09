<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\GetVoiceProfileDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VoiceProfileDomainId
 */
class GetVoiceProfileDomainRequest extends Request
{
    /**
     * @param array{VoiceProfileDomainId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
