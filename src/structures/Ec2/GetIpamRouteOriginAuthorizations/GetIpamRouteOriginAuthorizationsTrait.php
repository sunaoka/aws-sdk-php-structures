<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamRouteOriginAuthorizations;

trait GetIpamRouteOriginAuthorizationsTrait
{
    /**
     * @param GetIpamRouteOriginAuthorizationsRequest $args
     * @return GetIpamRouteOriginAuthorizationsResponse
     */
    public function getIpamRouteOriginAuthorizations(GetIpamRouteOriginAuthorizationsRequest $args)
    {
        $result = parent::getIpamRouteOriginAuthorizations($args->toArray());
        return new GetIpamRouteOriginAuthorizationsResponse($result->toArray());
    }
}
