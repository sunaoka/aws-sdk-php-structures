<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamRouteProtectionFindings;

trait GetIpamRouteProtectionFindingsTrait
{
    /**
     * @param GetIpamRouteProtectionFindingsRequest $args
     * @return GetIpamRouteProtectionFindingsResponse
     */
    public function getIpamRouteProtectionFindings(GetIpamRouteProtectionFindingsRequest $args)
    {
        $result = parent::getIpamRouteProtectionFindings($args->toArray());
        return new GetIpamRouteProtectionFindingsResponse($result->toArray());
    }
}
