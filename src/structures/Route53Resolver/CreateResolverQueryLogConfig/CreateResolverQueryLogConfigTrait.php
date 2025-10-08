<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\CreateResolverQueryLogConfig;

trait CreateResolverQueryLogConfigTrait
{
    /**
     * @param CreateResolverQueryLogConfigRequest $args
     * @return CreateResolverQueryLogConfigResponse
     */
    public function createResolverQueryLogConfig(CreateResolverQueryLogConfigRequest $args)
    {
        $result = parent::createResolverQueryLogConfig($args->toArray());
        return new CreateResolverQueryLogConfigResponse($result->toArray());
    }
}
