<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\SearchAgreements;

trait SearchAgreementsTrait
{
    /**
     * @param SearchAgreementsRequest $args
     * @return SearchAgreementsResponse
     */
    public function searchAgreements(SearchAgreementsRequest $args)
    {
        $result = parent::searchAgreements($args->toArray());
        return new SearchAgreementsResponse($result->toArray());
    }
}
