<?php

namespace Sunaoka\Aws\Structures\ElastiCache\RevokeCacheSecurityGroupIngress;

trait RevokeCacheSecurityGroupIngressTrait
{
    /**
     * @param RevokeCacheSecurityGroupIngressRequest $args
     * @return RevokeCacheSecurityGroupIngressResponse
     */
    public function revokeCacheSecurityGroupIngress(RevokeCacheSecurityGroupIngressRequest $args)
    {
        $result = parent::revokeCacheSecurityGroupIngress($args->toArray());
        return new RevokeCacheSecurityGroupIngressResponse($result->toArray());
    }
}
