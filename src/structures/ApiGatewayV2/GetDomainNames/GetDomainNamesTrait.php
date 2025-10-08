<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetDomainNames;

trait GetDomainNamesTrait
{
    /**
     * @param GetDomainNamesRequest $args
     * @return GetDomainNamesResponse
     */
    public function getDomainNames(GetDomainNamesRequest $args)
    {
        $result = parent::getDomainNames($args->toArray());
        return new GetDomainNamesResponse($result->toArray());
    }
}
