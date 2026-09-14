<?php

namespace Sunaoka\Aws\Structures\Glue\ListIntegrationTableProperties;

trait ListIntegrationTablePropertiesTrait
{
    /**
     * @param ListIntegrationTablePropertiesRequest $args
     * @return ListIntegrationTablePropertiesResponse
     */
    public function listIntegrationTableProperties(ListIntegrationTablePropertiesRequest $args)
    {
        $result = parent::listIntegrationTableProperties($args->toArray());
        return new ListIntegrationTablePropertiesResponse($result->toArray());
    }
}
