<?php

namespace Sunaoka\Aws\Structures\Route53Domains\EnableDomainTransferLock;

trait EnableDomainTransferLockTrait
{
    /**
     * @param EnableDomainTransferLockRequest $args
     * @return EnableDomainTransferLockResponse
     */
    public function enableDomainTransferLock(EnableDomainTransferLockRequest $args)
    {
        $result = parent::enableDomainTransferLock($args->toArray());
        return new EnableDomainTransferLockResponse($result->toArray());
    }
}
