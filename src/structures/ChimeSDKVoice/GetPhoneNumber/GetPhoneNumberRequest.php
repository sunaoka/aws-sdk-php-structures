<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\GetPhoneNumber;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PhoneNumberId
 */
class GetPhoneNumberRequest extends Request
{
    /**
     * @param array{PhoneNumberId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
