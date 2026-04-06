<?php

namespace Sunaoka\Aws\Structures\Glue\GetIntegrationTableProperties;

trait GetIntegrationTablePropertiesTrait
{
    /**
     * @param GetIntegrationTablePropertiesRequest $args
     * @return GetIntegrationTablePropertiesResponse
     */
    public function getIntegrationTableProperties(GetIntegrationTablePropertiesRequest $args)
    {
        $result = parent::getIntegrationTableProperties($args->toArray());
        return new GetIntegrationTablePropertiesResponse($result->toArray());
    }
}
