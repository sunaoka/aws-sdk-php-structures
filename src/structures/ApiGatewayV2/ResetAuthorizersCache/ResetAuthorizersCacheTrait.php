<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\ResetAuthorizersCache;

trait ResetAuthorizersCacheTrait
{
    /**
     * @param ResetAuthorizersCacheRequest $args
     * @return void
     */
    public function resetAuthorizersCache(ResetAuthorizersCacheRequest $args)
    {
        parent::resetAuthorizersCache($args->toArray());
    }
}
