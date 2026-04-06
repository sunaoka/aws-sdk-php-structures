<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteEmailAddress;

trait DeleteEmailAddressTrait
{
    /**
     * @param DeleteEmailAddressRequest $args
     * @return DeleteEmailAddressResponse
     */
    public function deleteEmailAddress(DeleteEmailAddressRequest $args)
    {
        $result = parent::deleteEmailAddress($args->toArray());
        return new DeleteEmailAddressResponse($result->toArray());
    }
}
