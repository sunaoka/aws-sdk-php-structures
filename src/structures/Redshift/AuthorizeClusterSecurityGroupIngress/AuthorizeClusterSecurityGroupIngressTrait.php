<?php

namespace Sunaoka\Aws\Structures\Redshift\AuthorizeClusterSecurityGroupIngress;

trait AuthorizeClusterSecurityGroupIngressTrait
{
    /**
     * @param AuthorizeClusterSecurityGroupIngressRequest $args
     * @return AuthorizeClusterSecurityGroupIngressResponse
     */
    public function authorizeClusterSecurityGroupIngress(AuthorizeClusterSecurityGroupIngressRequest $args)
    {
        $result = parent::authorizeClusterSecurityGroupIngress($args->toArray());
        return new AuthorizeClusterSecurityGroupIngressResponse($result->toArray());
    }
}
