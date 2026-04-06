<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateIntegrationTableProperties;

trait UpdateIntegrationTablePropertiesTrait
{
    /**
     * @param UpdateIntegrationTablePropertiesRequest $args
     * @return UpdateIntegrationTablePropertiesResponse
     */
    public function updateIntegrationTableProperties(UpdateIntegrationTablePropertiesRequest $args)
    {
        $result = parent::updateIntegrationTableProperties($args->toArray());
        return new UpdateIntegrationTablePropertiesResponse($result->toArray());
    }
}
