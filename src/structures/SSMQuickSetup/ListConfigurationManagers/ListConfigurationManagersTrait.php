<?php

namespace Sunaoka\Aws\Structures\SSMQuickSetup\ListConfigurationManagers;

trait ListConfigurationManagersTrait
{
    /**
     * @param ListConfigurationManagersRequest $args
     * @return ListConfigurationManagersResponse
     */
    public function listConfigurationManagers(ListConfigurationManagersRequest $args)
    {
        $result = parent::listConfigurationManagers($args->toArray());
        return new ListConfigurationManagersResponse($result->toArray());
    }
}
