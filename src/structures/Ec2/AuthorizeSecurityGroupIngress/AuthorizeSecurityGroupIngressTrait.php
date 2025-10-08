<?php

namespace Sunaoka\Aws\Structures\Ec2\AuthorizeSecurityGroupIngress;

trait AuthorizeSecurityGroupIngressTrait
{
    /**
     * @param AuthorizeSecurityGroupIngressRequest $args
     * @return AuthorizeSecurityGroupIngressResponse
     */
    public function authorizeSecurityGroupIngress(AuthorizeSecurityGroupIngressRequest $args)
    {
        $result = parent::authorizeSecurityGroupIngress($args->toArray());
        return new AuthorizeSecurityGroupIngressResponse($result->toArray());
    }
}
