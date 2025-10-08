<?php

namespace Sunaoka\Aws\Structures\Route53Domains\UpdateDomainContact;

trait UpdateDomainContactTrait
{
    /**
     * @param UpdateDomainContactRequest $args
     * @return UpdateDomainContactResponse
     */
    public function updateDomainContact(UpdateDomainContactRequest $args)
    {
        $result = parent::updateDomainContact($args->toArray());
        return new UpdateDomainContactResponse($result->toArray());
    }
}
