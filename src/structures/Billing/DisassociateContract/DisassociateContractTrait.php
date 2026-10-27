<?php

namespace Sunaoka\Aws\Structures\Billing\DisassociateContract;

trait DisassociateContractTrait
{
    /**
     * @param DisassociateContractRequest $args
     * @return DisassociateContractResponse
     */
    public function disassociateContract(DisassociateContractRequest $args)
    {
        $result = parent::disassociateContract($args->toArray());
        return new DisassociateContractResponse($result->toArray());
    }
}
