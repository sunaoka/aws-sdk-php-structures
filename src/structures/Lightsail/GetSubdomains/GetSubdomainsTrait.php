<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetSubdomains;

trait GetSubdomainsTrait
{
    /**
     * @param GetSubdomainsRequest $args
     * @return GetSubdomainsResponse
     */
    public function getSubdomains(GetSubdomainsRequest $args)
    {
        $result = parent::getSubdomains($args->toArray());
        return new GetSubdomainsResponse($result->toArray());
    }
}
