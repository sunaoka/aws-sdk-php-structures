<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\UpdateVoiceProfileDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VoiceProfileDomainId
 * @property string $Name
 * @property string $Description
 */
class UpdateVoiceProfileDomainRequest extends Request
{
    /**
     * @param array{
     *     VoiceProfileDomainId: string,
     *     Name?: string,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
