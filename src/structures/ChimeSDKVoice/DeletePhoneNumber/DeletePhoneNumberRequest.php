<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\DeletePhoneNumber;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PhoneNumberId
 */
class DeletePhoneNumberRequest extends Request
{
    /**
     * @param array{PhoneNumberId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
