<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\ValidateE911Address;

trait ValidateE911AddressTrait
{
    /**
     * @param ValidateE911AddressRequest $args
     * @return ValidateE911AddressResponse
     */
    public function validateE911Address(ValidateE911AddressRequest $args)
    {
        $result = parent::validateE911Address($args->toArray());
        return new ValidateE911AddressResponse($result->toArray());
    }
}
