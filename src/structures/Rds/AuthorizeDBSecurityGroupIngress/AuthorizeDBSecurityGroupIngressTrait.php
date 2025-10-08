<?php

namespace Sunaoka\Aws\Structures\Rds\AuthorizeDBSecurityGroupIngress;

trait AuthorizeDBSecurityGroupIngressTrait
{
    /**
     * @param AuthorizeDBSecurityGroupIngressRequest $args
     * @return AuthorizeDBSecurityGroupIngressResponse
     */
    public function authorizeDBSecurityGroupIngress(AuthorizeDBSecurityGroupIngressRequest $args)
    {
        $result = parent::authorizeDBSecurityGroupIngress($args->toArray());
        return new AuthorizeDBSecurityGroupIngressResponse($result->toArray());
    }
}
