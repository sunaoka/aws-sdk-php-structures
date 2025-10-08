<?php

namespace Sunaoka\Aws\Structures\Redshift\RevokeClusterSecurityGroupIngress;

trait RevokeClusterSecurityGroupIngressTrait
{
    /**
     * @param RevokeClusterSecurityGroupIngressRequest $args
     * @return RevokeClusterSecurityGroupIngressResponse
     */
    public function revokeClusterSecurityGroupIngress(RevokeClusterSecurityGroupIngressRequest $args)
    {
        $result = parent::revokeClusterSecurityGroupIngress($args->toArray());
        return new RevokeClusterSecurityGroupIngressResponse($result->toArray());
    }
}
