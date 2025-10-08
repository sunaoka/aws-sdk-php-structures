<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetDomain;

trait GetDomainTrait
{
    /**
     * @param GetDomainRequest $args
     * @return GetDomainResponse
     */
    public function getDomain(GetDomainRequest $args)
    {
        $result = parent::getDomain($args->toArray());
        return new GetDomainResponse($result->toArray());
    }
}
