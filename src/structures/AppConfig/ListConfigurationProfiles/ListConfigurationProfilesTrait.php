<?php

namespace Sunaoka\Aws\Structures\AppConfig\ListConfigurationProfiles;

trait ListConfigurationProfilesTrait
{
    /**
     * @param ListConfigurationProfilesRequest $args
     * @return ListConfigurationProfilesResponse
     */
    public function listConfigurationProfiles(ListConfigurationProfilesRequest $args)
    {
        $result = parent::listConfigurationProfiles($args->toArray());
        return new ListConfigurationProfilesResponse($result->toArray());
    }
}
