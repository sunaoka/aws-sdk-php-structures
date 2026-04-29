<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListConfigurationBundles;

trait ListConfigurationBundlesTrait
{
    /**
     * @param ListConfigurationBundlesRequest $args
     * @return ListConfigurationBundlesResponse
     */
    public function listConfigurationBundles(ListConfigurationBundlesRequest $args)
    {
        $result = parent::listConfigurationBundles($args->toArray());
        return new ListConfigurationBundlesResponse($result->toArray());
    }
}
