<?php

namespace Sunaoka\Aws\Structures\WorkMail\UpdatePrimaryEmailAddress;

trait UpdatePrimaryEmailAddressTrait
{
    /**
     * @param UpdatePrimaryEmailAddressRequest $args
     * @return UpdatePrimaryEmailAddressResponse
     */
    public function updatePrimaryEmailAddress(UpdatePrimaryEmailAddressRequest $args)
    {
        $result = parent::updatePrimaryEmailAddress($args->toArray());
        return new UpdatePrimaryEmailAddressResponse($result->toArray());
    }
}
