<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetConfigurationBundle;

trait GetConfigurationBundleTrait
{
    /**
     * @param GetConfigurationBundleRequest $args
     * @return GetConfigurationBundleResponse
     */
    public function getConfigurationBundle(GetConfigurationBundleRequest $args)
    {
        $result = parent::getConfigurationBundle($args->toArray());
        return new GetConfigurationBundleResponse($result->toArray());
    }
}
