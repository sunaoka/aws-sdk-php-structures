<?php

namespace Sunaoka\Aws\Structures\Route53Domains\CancelDomainTransferToAnotherAwsAccount;

trait CancelDomainTransferToAnotherAwsAccountTrait
{
    /**
     * @param CancelDomainTransferToAnotherAwsAccountRequest $args
     * @return CancelDomainTransferToAnotherAwsAccountResponse
     */
    public function cancelDomainTransferToAnotherAwsAccount(CancelDomainTransferToAnotherAwsAccountRequest $args)
    {
        $result = parent::cancelDomainTransferToAnotherAwsAccount($args->toArray());
        return new CancelDomainTransferToAnotherAwsAccountResponse($result->toArray());
    }
}
