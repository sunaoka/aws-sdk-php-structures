<?php

namespace Sunaoka\Aws\Structures\ElastiCache\AuthorizeCacheSecurityGroupIngress;

trait AuthorizeCacheSecurityGroupIngressTrait
{
    /**
     * @param AuthorizeCacheSecurityGroupIngressRequest $args
     * @return AuthorizeCacheSecurityGroupIngressResponse
     */
    public function authorizeCacheSecurityGroupIngress(AuthorizeCacheSecurityGroupIngressRequest $args)
    {
        $result = parent::authorizeCacheSecurityGroupIngress($args->toArray());
        return new AuthorizeCacheSecurityGroupIngressResponse($result->toArray());
    }
}
