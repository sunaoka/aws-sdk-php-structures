<?php

namespace Sunaoka\Aws\Structures\Odb\AcceptMarketplaceRegistration;

trait AcceptMarketplaceRegistrationTrait
{
    /**
     * @param AcceptMarketplaceRegistrationRequest $args
     * @return AcceptMarketplaceRegistrationResponse
     */
    public function acceptMarketplaceRegistration(AcceptMarketplaceRegistrationRequest $args)
    {
        $result = parent::acceptMarketplaceRegistration($args->toArray());
        return new AcceptMarketplaceRegistrationResponse($result->toArray());
    }
}
