<?php

namespace Sunaoka\Aws\Structures\Glue\ListIntegrationResourceProperties;

trait ListIntegrationResourcePropertiesTrait
{
    /**
     * @param ListIntegrationResourcePropertiesRequest $args
     * @return ListIntegrationResourcePropertiesResponse
     */
    public function listIntegrationResourceProperties(ListIntegrationResourcePropertiesRequest $args)
    {
        $result = parent::listIntegrationResourceProperties($args->toArray());
        return new ListIntegrationResourcePropertiesResponse($result->toArray());
    }
}
