<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\UpdateResolverDnssecConfig;

trait UpdateResolverDnssecConfigTrait
{
    /**
     * @param UpdateResolverDnssecConfigRequest $args
     * @return UpdateResolverDnssecConfigResponse
     */
    public function updateResolverDnssecConfig(UpdateResolverDnssecConfigRequest $args)
    {
        $result = parent::updateResolverDnssecConfig($args->toArray());
        return new UpdateResolverDnssecConfigResponse($result->toArray());
    }
}
