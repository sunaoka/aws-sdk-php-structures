<?php

namespace Sunaoka\Aws\Structures\Rds\RevokeDBSecurityGroupIngress;

trait RevokeDBSecurityGroupIngressTrait
{
    /**
     * @param RevokeDBSecurityGroupIngressRequest $args
     * @return RevokeDBSecurityGroupIngressResponse
     */
    public function revokeDBSecurityGroupIngress(RevokeDBSecurityGroupIngressRequest $args)
    {
        $result = parent::revokeDBSecurityGroupIngress($args->toArray());
        return new RevokeDBSecurityGroupIngressResponse($result->toArray());
    }
}
