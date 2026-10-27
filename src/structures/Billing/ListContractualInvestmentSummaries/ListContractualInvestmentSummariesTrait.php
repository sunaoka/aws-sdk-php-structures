<?php

namespace Sunaoka\Aws\Structures\Billing\ListContractualInvestmentSummaries;

trait ListContractualInvestmentSummariesTrait
{
    /**
     * @param ListContractualInvestmentSummariesRequest $args
     * @return ListContractualInvestmentSummariesResponse
     */
    public function listContractualInvestmentSummaries(ListContractualInvestmentSummariesRequest $args)
    {
        $result = parent::listContractualInvestmentSummaries($args->toArray());
        return new ListContractualInvestmentSummariesResponse($result->toArray());
    }
}
