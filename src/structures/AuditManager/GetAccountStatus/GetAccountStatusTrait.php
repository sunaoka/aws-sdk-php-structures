<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetAccountStatus;

trait GetAccountStatusTrait
{
    /**
     * @param GetAccountStatusRequest $args
     * @return GetAccountStatusResponse
     */
    public function getAccountStatus(GetAccountStatusRequest $args)
    {
        $result = parent::getAccountStatus($args->toArray());
        return new GetAccountStatusResponse($result->toArray());
    }
}
