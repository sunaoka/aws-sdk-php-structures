<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DiscardRegistrationVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RegistrationId
 */
class DiscardRegistrationVersionRequest extends Request
{
    /**
     * @param array{RegistrationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
