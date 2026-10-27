<?php

namespace Sunaoka\Aws\Structures\Billing\ListContractualInvestmentAttestations;

trait ListContractualInvestmentAttestationsTrait
{
    /**
     * @param ListContractualInvestmentAttestationsRequest $args
     * @return ListContractualInvestmentAttestationsResponse
     */
    public function listContractualInvestmentAttestations(ListContractualInvestmentAttestationsRequest $args)
    {
        $result = parent::listContractualInvestmentAttestations($args->toArray());
        return new ListContractualInvestmentAttestationsResponse($result->toArray());
    }
}
