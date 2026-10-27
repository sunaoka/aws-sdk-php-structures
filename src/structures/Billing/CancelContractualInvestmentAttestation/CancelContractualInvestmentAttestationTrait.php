<?php

namespace Sunaoka\Aws\Structures\Billing\CancelContractualInvestmentAttestation;

trait CancelContractualInvestmentAttestationTrait
{
    /**
     * @param CancelContractualInvestmentAttestationRequest $args
     * @return CancelContractualInvestmentAttestationResponse
     */
    public function cancelContractualInvestmentAttestation(CancelContractualInvestmentAttestationRequest $args)
    {
        $result = parent::cancelContractualInvestmentAttestation($args->toArray());
        return new CancelContractualInvestmentAttestationResponse($result->toArray());
    }
}
