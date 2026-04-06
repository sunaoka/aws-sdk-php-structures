<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\CarrierLookup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PhoneNumber
 */
class CarrierLookupRequest extends Request
{
    /**
     * @param array{PhoneNumber: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
