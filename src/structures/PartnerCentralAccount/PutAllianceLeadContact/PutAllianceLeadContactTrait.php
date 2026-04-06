<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\PutAllianceLeadContact;

trait PutAllianceLeadContactTrait
{
    /**
     * @param PutAllianceLeadContactRequest $args
     * @return PutAllianceLeadContactResponse
     */
    public function putAllianceLeadContact(PutAllianceLeadContactRequest $args)
    {
        $result = parent::putAllianceLeadContact($args->toArray());
        return new PutAllianceLeadContactResponse($result->toArray());
    }
}
