<?php

namespace Sunaoka\Aws\Structures\Route53Domains\DisableDomainTransferLock;

trait DisableDomainTransferLockTrait
{
    /**
     * @param DisableDomainTransferLockRequest $args
     * @return DisableDomainTransferLockResponse
     */
    public function disableDomainTransferLock(DisableDomainTransferLockRequest $args)
    {
        $result = parent::disableDomainTransferLock($args->toArray());
        return new DisableDomainTransferLockResponse($result->toArray());
    }
}
