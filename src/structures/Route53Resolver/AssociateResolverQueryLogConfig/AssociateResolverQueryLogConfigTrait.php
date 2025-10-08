<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\AssociateResolverQueryLogConfig;

trait AssociateResolverQueryLogConfigTrait
{
    /**
     * @param AssociateResolverQueryLogConfigRequest $args
     * @return AssociateResolverQueryLogConfigResponse
     */
    public function associateResolverQueryLogConfig(AssociateResolverQueryLogConfigRequest $args)
    {
        $result = parent::associateResolverQueryLogConfig($args->toArray());
        return new AssociateResolverQueryLogConfigResponse($result->toArray());
    }
}
