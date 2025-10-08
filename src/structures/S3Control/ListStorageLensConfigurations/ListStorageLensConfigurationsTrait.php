<?php

namespace Sunaoka\Aws\Structures\S3Control\ListStorageLensConfigurations;

trait ListStorageLensConfigurationsTrait
{
    /**
     * @param ListStorageLensConfigurationsRequest $args
     * @return ListStorageLensConfigurationsResponse
     */
    public function listStorageLensConfigurations(ListStorageLensConfigurationsRequest $args)
    {
        $result = parent::listStorageLensConfigurations($args->toArray());
        return new ListStorageLensConfigurationsResponse($result->toArray());
    }
}
