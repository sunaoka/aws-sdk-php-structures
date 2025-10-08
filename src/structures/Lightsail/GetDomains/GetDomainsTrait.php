<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetDomains;

trait GetDomainsTrait
{
    /**
     * @param GetDomainsRequest $args
     * @return GetDomainsResponse
     */
    public function getDomains(GetDomainsRequest $args)
    {
        $result = parent::getDomains($args->toArray());
        return new GetDomainsResponse($result->toArray());
    }
}
