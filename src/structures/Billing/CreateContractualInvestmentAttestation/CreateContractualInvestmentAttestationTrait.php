<?php

namespace Sunaoka\Aws\Structures\Billing\CreateContractualInvestmentAttestation;

trait CreateContractualInvestmentAttestationTrait
{
    /**
     * @param CreateContractualInvestmentAttestationRequest $args
     * @return CreateContractualInvestmentAttestationResponse
     */
    public function createContractualInvestmentAttestation(CreateContractualInvestmentAttestationRequest $args)
    {
        $result = parent::createContractualInvestmentAttestation($args->toArray());
        return new CreateContractualInvestmentAttestationResponse($result->toArray());
    }
}
