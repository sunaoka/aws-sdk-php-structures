<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateConfigurationBundle;

trait UpdateConfigurationBundleTrait
{
    /**
     * @param UpdateConfigurationBundleRequest $args
     * @return UpdateConfigurationBundleResponse
     */
    public function updateConfigurationBundle(UpdateConfigurationBundleRequest $args)
    {
        $result = parent::updateConfigurationBundle($args->toArray());
        return new UpdateConfigurationBundleResponse($result->toArray());
    }
}
