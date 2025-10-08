<?php

namespace Sunaoka\Aws\Structures\Ec2\AuthorizeSecurityGroupEgress;

trait AuthorizeSecurityGroupEgressTrait
{
    /**
     * @param AuthorizeSecurityGroupEgressRequest $args
     * @return AuthorizeSecurityGroupEgressResponse
     */
    public function authorizeSecurityGroupEgress(AuthorizeSecurityGroupEgressRequest $args)
    {
        $result = parent::authorizeSecurityGroupEgress($args->toArray());
        return new AuthorizeSecurityGroupEgressResponse($result->toArray());
    }
}
