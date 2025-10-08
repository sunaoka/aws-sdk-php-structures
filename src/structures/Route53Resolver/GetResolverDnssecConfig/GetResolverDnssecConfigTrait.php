<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\GetResolverDnssecConfig;

trait GetResolverDnssecConfigTrait
{
    /**
     * @param GetResolverDnssecConfigRequest $args
     * @return GetResolverDnssecConfigResponse
     */
    public function getResolverDnssecConfig(GetResolverDnssecConfigRequest $args)
    {
        $result = parent::getResolverDnssecConfig($args->toArray());
        return new GetResolverDnssecConfigResponse($result->toArray());
    }
}
