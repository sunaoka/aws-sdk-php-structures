<?php

namespace Sunaoka\Aws\Structures\Ec2\GetVerifiedAccessEndpointTargets;

trait GetVerifiedAccessEndpointTargetsTrait
{
    /**
     * @param GetVerifiedAccessEndpointTargetsRequest $args
     * @return GetVerifiedAccessEndpointTargetsResponse
     */
    public function getVerifiedAccessEndpointTargets(GetVerifiedAccessEndpointTargetsRequest $args)
    {
        $result = parent::getVerifiedAccessEndpointTargets($args->toArray());
        return new GetVerifiedAccessEndpointTargetsResponse($result->toArray());
    }
}
