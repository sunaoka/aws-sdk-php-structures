<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetPublicKeyConfig;

trait GetPublicKeyConfigTrait
{
    /**
     * @param GetPublicKeyConfigRequest $args
     * @return GetPublicKeyConfigResponse
     */
    public function getPublicKeyConfig(GetPublicKeyConfigRequest $args)
    {
        $result = parent::getPublicKeyConfig($args->toArray());
        return new GetPublicKeyConfigResponse($result->toArray());
    }
}
