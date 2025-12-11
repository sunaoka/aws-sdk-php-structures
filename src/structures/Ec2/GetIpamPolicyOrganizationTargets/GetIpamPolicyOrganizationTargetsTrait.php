<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamPolicyOrganizationTargets;

trait GetIpamPolicyOrganizationTargetsTrait
{
    /**
     * @param GetIpamPolicyOrganizationTargetsRequest $args
     * @return GetIpamPolicyOrganizationTargetsResponse
     */
    public function getIpamPolicyOrganizationTargets(GetIpamPolicyOrganizationTargetsRequest $args)
    {
        $result = parent::getIpamPolicyOrganizationTargets($args->toArray());
        return new GetIpamPolicyOrganizationTargetsResponse($result->toArray());
    }
}
