<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\UpdateVoiceProfileDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VoiceProfileDomainId
 * @property string|null $Name
 * @property string|null $Description
 */
class UpdateVoiceProfileDomainRequest extends Request
{
    /**
     * @param array{
     *     VoiceProfileDomainId: string,
     *     Name?: string|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
