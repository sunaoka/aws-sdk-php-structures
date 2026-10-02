<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\UpdateBrandProfileFromRegistration;

trait UpdateBrandProfileFromRegistrationTrait
{
    /**
     * @param UpdateBrandProfileFromRegistrationRequest $args
     * @return UpdateBrandProfileFromRegistrationResponse
     */
    public function updateBrandProfileFromRegistration(UpdateBrandProfileFromRegistrationRequest $args)
    {
        $result = parent::updateBrandProfileFromRegistration($args->toArray());
        return new UpdateBrandProfileFromRegistrationResponse($result->toArray());
    }
}
