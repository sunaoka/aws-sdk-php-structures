<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetConfigurationBundleVersion;

trait GetConfigurationBundleVersionTrait
{
    /**
     * @param GetConfigurationBundleVersionRequest $args
     * @return GetConfigurationBundleVersionResponse
     */
    public function getConfigurationBundleVersion(GetConfigurationBundleVersionRequest $args)
    {
        $result = parent::getConfigurationBundleVersion($args->toArray());
        return new GetConfigurationBundleVersionResponse($result->toArray());
    }
}
