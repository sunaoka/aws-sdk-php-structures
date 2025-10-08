<?php

namespace Sunaoka\Aws\Structures\Route53Domains\TransferDomainToAnotherAwsAccount;

trait TransferDomainToAnotherAwsAccountTrait
{
    /**
     * @param TransferDomainToAnotherAwsAccountRequest $args
     * @return TransferDomainToAnotherAwsAccountResponse
     */
    public function transferDomainToAnotherAwsAccount(TransferDomainToAnotherAwsAccountRequest $args)
    {
        $result = parent::transferDomainToAnotherAwsAccount($args->toArray());
        return new TransferDomainToAnotherAwsAccountResponse($result->toArray());
    }
}
