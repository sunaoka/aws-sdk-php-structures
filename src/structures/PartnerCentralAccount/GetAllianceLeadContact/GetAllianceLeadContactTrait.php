<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\GetAllianceLeadContact;

trait GetAllianceLeadContactTrait
{
    /**
     * @param GetAllianceLeadContactRequest $args
     * @return GetAllianceLeadContactResponse
     */
    public function getAllianceLeadContact(GetAllianceLeadContactRequest $args)
    {
        $result = parent::getAllianceLeadContact($args->toArray());
        return new GetAllianceLeadContactResponse($result->toArray());
    }
}
