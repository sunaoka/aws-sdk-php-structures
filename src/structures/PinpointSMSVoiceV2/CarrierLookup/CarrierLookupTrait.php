<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\CarrierLookup;

trait CarrierLookupTrait
{
    /**
     * @param CarrierLookupRequest $args
     * @return CarrierLookupResponse
     */
    public function carrierLookup(CarrierLookupRequest $args)
    {
        $result = parent::carrierLookup($args->toArray());
        return new CarrierLookupResponse($result->toArray());
    }
}
