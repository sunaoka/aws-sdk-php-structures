<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\GetPhoneNumberOrder;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PhoneNumberOrderId
 */
class GetPhoneNumberOrderRequest extends Request
{
    /**
     * @param array{PhoneNumberOrderId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
