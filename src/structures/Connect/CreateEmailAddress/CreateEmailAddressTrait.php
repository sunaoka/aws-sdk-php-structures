<?php

namespace Sunaoka\Aws\Structures\Connect\CreateEmailAddress;

trait CreateEmailAddressTrait
{
    /**
     * @param CreateEmailAddressRequest $args
     * @return CreateEmailAddressResponse
     */
    public function createEmailAddress(CreateEmailAddressRequest $args)
    {
        $result = parent::createEmailAddress($args->toArray());
        return new CreateEmailAddressResponse($result->toArray());
    }
}
