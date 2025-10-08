<?php

namespace Sunaoka\Aws\Structures\Route53Domains\DisableDomainAutoRenew;

trait DisableDomainAutoRenewTrait
{
    /**
     * @param DisableDomainAutoRenewRequest $args
     * @return DisableDomainAutoRenewResponse
     */
    public function disableDomainAutoRenew(DisableDomainAutoRenewRequest $args)
    {
        $result = parent::disableDomainAutoRenew($args->toArray());
        return new DisableDomainAutoRenewResponse($result->toArray());
    }
}
