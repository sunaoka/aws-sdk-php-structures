<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetKeyGroupConfig;

trait GetKeyGroupConfigTrait
{
    /**
     * @param GetKeyGroupConfigRequest $args
     * @return GetKeyGroupConfigResponse
     */
    public function getKeyGroupConfig(GetKeyGroupConfigRequest $args)
    {
        $result = parent::getKeyGroupConfig($args->toArray());
        return new GetKeyGroupConfigResponse($result->toArray());
    }
}
