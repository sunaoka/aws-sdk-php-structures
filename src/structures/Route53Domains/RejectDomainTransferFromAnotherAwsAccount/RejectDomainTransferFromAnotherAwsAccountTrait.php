<?php

namespace Sunaoka\Aws\Structures\Route53Domains\RejectDomainTransferFromAnotherAwsAccount;

trait RejectDomainTransferFromAnotherAwsAccountTrait
{
    /**
     * @param RejectDomainTransferFromAnotherAwsAccountRequest $args
     * @return RejectDomainTransferFromAnotherAwsAccountResponse
     */
    public function rejectDomainTransferFromAnotherAwsAccount(RejectDomainTransferFromAnotherAwsAccountRequest $args)
    {
        $result = parent::rejectDomainTransferFromAnotherAwsAccount($args->toArray());
        return new RejectDomainTransferFromAnotherAwsAccountResponse($result->toArray());
    }
}
