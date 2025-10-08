<?php

namespace Sunaoka\Aws\Structures\Transfer\ListAgreements;

trait ListAgreementsTrait
{
    /**
     * @param ListAgreementsRequest $args
     * @return ListAgreementsResponse
     */
    public function listAgreements(ListAgreementsRequest $args)
    {
        $result = parent::listAgreements($args->toArray());
        return new ListAgreementsResponse($result->toArray());
    }
}
