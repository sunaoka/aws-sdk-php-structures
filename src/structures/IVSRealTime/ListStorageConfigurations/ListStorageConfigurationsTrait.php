<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\ListStorageConfigurations;

trait ListStorageConfigurationsTrait
{
    /**
     * @param ListStorageConfigurationsRequest $args
     * @return ListStorageConfigurationsResponse
     */
    public function listStorageConfigurations(ListStorageConfigurationsRequest $args)
    {
        $result = parent::listStorageConfigurations($args->toArray());
        return new ListStorageConfigurationsResponse($result->toArray());
    }
}
