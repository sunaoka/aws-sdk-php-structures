<?php

namespace Sunaoka\Aws\Structures\TrustedAdvisor\ListOrganizationRecommendationAccounts;

trait ListOrganizationRecommendationAccountsTrait
{
    /**
     * @param ListOrganizationRecommendationAccountsRequest $args
     * @return ListOrganizationRecommendationAccountsResponse
     */
    public function listOrganizationRecommendationAccounts(ListOrganizationRecommendationAccountsRequest $args)
    {
        $result = parent::listOrganizationRecommendationAccounts($args->toArray());
        return new ListOrganizationRecommendationAccountsResponse($result->toArray());
    }
}
