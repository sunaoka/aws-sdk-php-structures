<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListConfigurationBundleVersions;

trait ListConfigurationBundleVersionsTrait
{
    /**
     * @param ListConfigurationBundleVersionsRequest $args
     * @return ListConfigurationBundleVersionsResponse
     */
    public function listConfigurationBundleVersions(ListConfigurationBundleVersionsRequest $args)
    {
        $result = parent::listConfigurationBundleVersions($args->toArray());
        return new ListConfigurationBundleVersionsResponse($result->toArray());
    }
}
