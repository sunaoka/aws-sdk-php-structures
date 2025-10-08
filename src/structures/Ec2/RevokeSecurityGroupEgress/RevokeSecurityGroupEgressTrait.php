<?php

namespace Sunaoka\Aws\Structures\Ec2\RevokeSecurityGroupEgress;

trait RevokeSecurityGroupEgressTrait
{
    /**
     * @param RevokeSecurityGroupEgressRequest $args
     * @return RevokeSecurityGroupEgressResponse
     */
    public function revokeSecurityGroupEgress(RevokeSecurityGroupEgressRequest $args)
    {
        $result = parent::revokeSecurityGroupEgress($args->toArray());
        return new RevokeSecurityGroupEgressResponse($result->toArray());
    }
}
