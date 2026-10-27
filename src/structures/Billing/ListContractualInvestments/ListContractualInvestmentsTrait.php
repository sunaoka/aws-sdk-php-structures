<?php

namespace Sunaoka\Aws\Structures\Billing\ListContractualInvestments;

trait ListContractualInvestmentsTrait
{
    /**
     * @param ListContractualInvestmentsRequest $args
     * @return ListContractualInvestmentsResponse
     */
    public function listContractualInvestments(ListContractualInvestmentsRequest $args)
    {
        $result = parent::listContractualInvestments($args->toArray());
        return new ListContractualInvestmentsResponse($result->toArray());
    }
}
