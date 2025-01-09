<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\ReleasePhoneNumber;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PhoneNumberId
 */
class ReleasePhoneNumberRequest extends Request
{
    /**
     * @param array{PhoneNumberId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
