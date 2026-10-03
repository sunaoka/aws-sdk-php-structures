<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\CarrierLookup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PhoneNumber
 * @property bool|null $EnableCleansing
 */
class CarrierLookupRequest extends Request
{
    /**
     * @param array{
     *     PhoneNumber: string,
     *     EnableCleansing?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
