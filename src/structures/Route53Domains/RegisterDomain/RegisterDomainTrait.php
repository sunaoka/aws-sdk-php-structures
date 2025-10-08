<?php

namespace Sunaoka\Aws\Structures\Route53Domains\RegisterDomain;

trait RegisterDomainTrait
{
    /**
     * @param RegisterDomainRequest $args
     * @return RegisterDomainResponse
     */
    public function registerDomain(RegisterDomainRequest $args)
    {
        $result = parent::registerDomain($args->toArray());
        return new RegisterDomainResponse($result->toArray());
    }
}
