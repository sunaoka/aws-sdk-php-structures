<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\RenewOffering;

trait RenewOfferingTrait
{
    /**
     * @param RenewOfferingRequest $args
     * @return RenewOfferingResponse
     */
    public function renewOffering(RenewOfferingRequest $args)
    {
        $result = parent::renewOffering($args->toArray());
        return new RenewOfferingResponse($result->toArray());
    }
}
