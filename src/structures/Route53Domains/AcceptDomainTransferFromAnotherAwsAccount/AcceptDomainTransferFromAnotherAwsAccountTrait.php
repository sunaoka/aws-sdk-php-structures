<?php

namespace Sunaoka\Aws\Structures\Route53Domains\AcceptDomainTransferFromAnotherAwsAccount;

trait AcceptDomainTransferFromAnotherAwsAccountTrait
{
    /**
     * @param AcceptDomainTransferFromAnotherAwsAccountRequest $args
     * @return AcceptDomainTransferFromAnotherAwsAccountResponse
     */
    public function acceptDomainTransferFromAnotherAwsAccount(AcceptDomainTransferFromAnotherAwsAccountRequest $args)
    {
        $result = parent::acceptDomainTransferFromAnotherAwsAccount($args->toArray());
        return new AcceptDomainTransferFromAnotherAwsAccountResponse($result->toArray());
    }
}
