<?php

namespace Sunaoka\Aws\Structures\Route53Domains\RenewDomain;

trait RenewDomainTrait
{
    /**
     * @param RenewDomainRequest $args
     * @return RenewDomainResponse
     */
    public function renewDomain(RenewDomainRequest $args)
    {
        $result = parent::renewDomain($args->toArray());
        return new RenewDomainResponse($result->toArray());
    }
}
