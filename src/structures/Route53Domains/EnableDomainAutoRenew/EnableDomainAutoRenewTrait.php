<?php

namespace Sunaoka\Aws\Structures\Route53Domains\EnableDomainAutoRenew;

trait EnableDomainAutoRenewTrait
{
    /**
     * @param EnableDomainAutoRenewRequest $args
     * @return EnableDomainAutoRenewResponse
     */
    public function enableDomainAutoRenew(EnableDomainAutoRenewRequest $args)
    {
        $result = parent::enableDomainAutoRenew($args->toArray());
        return new EnableDomainAutoRenewResponse($result->toArray());
    }
}
