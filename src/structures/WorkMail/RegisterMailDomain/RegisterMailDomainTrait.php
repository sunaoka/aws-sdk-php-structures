<?php

namespace Sunaoka\Aws\Structures\WorkMail\RegisterMailDomain;

trait RegisterMailDomainTrait
{
    /**
     * @param RegisterMailDomainRequest $args
     * @return RegisterMailDomainResponse
     */
    public function registerMailDomain(RegisterMailDomainRequest $args)
    {
        $result = parent::registerMailDomain($args->toArray());
        return new RegisterMailDomainResponse($result->toArray());
    }
}
