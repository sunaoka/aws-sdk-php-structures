<?php

namespace Sunaoka\Aws\Structures\Account\GetAlternateContact;

trait GetAlternateContactTrait
{
    /**
     * @param GetAlternateContactRequest $args
     * @return GetAlternateContactResponse
     */
    public function getAlternateContact(GetAlternateContactRequest $args)
    {
        $result = parent::getAlternateContact($args->toArray());
        return new GetAlternateContactResponse($result->toArray());
    }
}
