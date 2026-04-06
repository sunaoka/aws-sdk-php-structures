<?php

namespace Sunaoka\Aws\Structures\CodeStarconnections\ListSyncConfigurations;

trait ListSyncConfigurationsTrait
{
    /**
     * @param ListSyncConfigurationsRequest $args
     * @return ListSyncConfigurationsResponse
     */
    public function listSyncConfigurations(ListSyncConfigurationsRequest $args)
    {
        $result = parent::listSyncConfigurations($args->toArray());
        return new ListSyncConfigurationsResponse($result->toArray());
    }
}
