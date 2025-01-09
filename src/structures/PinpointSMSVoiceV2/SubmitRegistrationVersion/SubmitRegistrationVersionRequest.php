<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\SubmitRegistrationVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RegistrationId
 */
class SubmitRegistrationVersionRequest extends Request
{
    /**
     * @param array{RegistrationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
