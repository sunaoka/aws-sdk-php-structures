<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteConfigurationBundle;

trait DeleteConfigurationBundleTrait
{
    /**
     * @param DeleteConfigurationBundleRequest $args
     * @return DeleteConfigurationBundleResponse
     */
    public function deleteConfigurationBundle(DeleteConfigurationBundleRequest $args)
    {
        $result = parent::deleteConfigurationBundle($args->toArray());
        return new DeleteConfigurationBundleResponse($result->toArray());
    }
}
