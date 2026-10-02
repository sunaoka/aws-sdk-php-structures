<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\CreateBrandProfileFromRegistration;

trait CreateBrandProfileFromRegistrationTrait
{
    /**
     * @param CreateBrandProfileFromRegistrationRequest $args
     * @return CreateBrandProfileFromRegistrationResponse
     */
    public function createBrandProfileFromRegistration(CreateBrandProfileFromRegistrationRequest $args)
    {
        $result = parent::createBrandProfileFromRegistration($args->toArray());
        return new CreateBrandProfileFromRegistrationResponse($result->toArray());
    }
}
