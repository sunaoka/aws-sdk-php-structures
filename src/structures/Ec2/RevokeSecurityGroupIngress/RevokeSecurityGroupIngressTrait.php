<?php

namespace Sunaoka\Aws\Structures\Ec2\RevokeSecurityGroupIngress;

trait RevokeSecurityGroupIngressTrait
{
    /**
     * @param RevokeSecurityGroupIngressRequest $args
     * @return RevokeSecurityGroupIngressResponse
     */
    public function revokeSecurityGroupIngress(RevokeSecurityGroupIngressRequest $args)
    {
        $result = parent::revokeSecurityGroupIngress($args->toArray());
        return new RevokeSecurityGroupIngressResponse($result->toArray());
    }
}
