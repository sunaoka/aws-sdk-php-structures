<?php

namespace Sunaoka\Aws\Structures\Glue\CreateIntegrationTableProperties;

trait CreateIntegrationTablePropertiesTrait
{
    /**
     * @param CreateIntegrationTablePropertiesRequest $args
     * @return CreateIntegrationTablePropertiesResponse
     */
    public function createIntegrationTableProperties(CreateIntegrationTablePropertiesRequest $args)
    {
        $result = parent::createIntegrationTableProperties($args->toArray());
        return new CreateIntegrationTablePropertiesResponse($result->toArray());
    }
}
