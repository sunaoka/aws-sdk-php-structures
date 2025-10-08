<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\GetResolverQueryLogConfig;

trait GetResolverQueryLogConfigTrait
{
    /**
     * @param GetResolverQueryLogConfigRequest $args
     * @return GetResolverQueryLogConfigResponse
     */
    public function getResolverQueryLogConfig(GetResolverQueryLogConfigRequest $args)
    {
        $result = parent::getResolverQueryLogConfig($args->toArray());
        return new GetResolverQueryLogConfigResponse($result->toArray());
    }
}
