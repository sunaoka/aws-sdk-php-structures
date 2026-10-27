<?php

namespace Sunaoka\Aws\Structures\Billing\AssociateContract;

trait AssociateContractTrait
{
    /**
     * @param AssociateContractRequest $args
     * @return AssociateContractResponse
     */
    public function associateContract(AssociateContractRequest $args)
    {
        $result = parent::associateContract($args->toArray());
        return new AssociateContractResponse($result->toArray());
    }
}
