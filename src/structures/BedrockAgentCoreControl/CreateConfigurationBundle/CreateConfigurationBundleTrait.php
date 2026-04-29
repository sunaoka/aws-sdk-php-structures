<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateConfigurationBundle;

trait CreateConfigurationBundleTrait
{
    /**
     * @param CreateConfigurationBundleRequest $args
     * @return CreateConfigurationBundleResponse
     */
    public function createConfigurationBundle(CreateConfigurationBundleRequest $args)
    {
        $result = parent::createConfigurationBundle($args->toArray());
        return new CreateConfigurationBundleResponse($result->toArray());
    }
}
