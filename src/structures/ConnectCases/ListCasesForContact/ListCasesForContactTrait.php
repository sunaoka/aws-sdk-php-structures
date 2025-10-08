<?php

namespace Sunaoka\Aws\Structures\ConnectCases\ListCasesForContact;

trait ListCasesForContactTrait
{
    /**
     * @param ListCasesForContactRequest $args
     * @return ListCasesForContactResponse
     */
    public function listCasesForContact(ListCasesForContactRequest $args)
    {
        $result = parent::listCasesForContact($args->toArray());
        return new ListCasesForContactResponse($result->toArray());
    }
}
