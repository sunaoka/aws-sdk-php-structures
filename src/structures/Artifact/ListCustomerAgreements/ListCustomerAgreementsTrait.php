<?php

namespace Sunaoka\Aws\Structures\Artifact\ListCustomerAgreements;

trait ListCustomerAgreementsTrait
{
    /**
     * @param ListCustomerAgreementsRequest $args
     * @return ListCustomerAgreementsResponse
     */
    public function listCustomerAgreements(ListCustomerAgreementsRequest $args)
    {
        $result = parent::listCustomerAgreements($args->toArray());
        return new ListCustomerAgreementsResponse($result->toArray());
    }
}
