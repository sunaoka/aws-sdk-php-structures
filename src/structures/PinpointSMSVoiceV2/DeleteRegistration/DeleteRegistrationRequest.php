<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DeleteRegistration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RegistrationId
 */
class DeleteRegistrationRequest extends Request
{
    /**
     * @param array{RegistrationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
