<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\DeleteResolverQueryLogConfig;

trait DeleteResolverQueryLogConfigTrait
{
    /**
     * @param DeleteResolverQueryLogConfigRequest $args
     * @return DeleteResolverQueryLogConfigResponse
     */
    public function deleteResolverQueryLogConfig(DeleteResolverQueryLogConfigRequest $args)
    {
        $result = parent::deleteResolverQueryLogConfig($args->toArray());
        return new DeleteResolverQueryLogConfigResponse($result->toArray());
    }
}
