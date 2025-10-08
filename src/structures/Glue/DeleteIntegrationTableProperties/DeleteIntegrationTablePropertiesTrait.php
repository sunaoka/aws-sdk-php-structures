<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteIntegrationTableProperties;

trait DeleteIntegrationTablePropertiesTrait
{
    /**
     * @param DeleteIntegrationTablePropertiesRequest $args
     * @return DeleteIntegrationTablePropertiesResponse
     */
    public function deleteIntegrationTableProperties(DeleteIntegrationTablePropertiesRequest $args)
    {
        $result = parent::deleteIntegrationTableProperties($args->toArray());
        return new DeleteIntegrationTablePropertiesResponse($result->toArray());
    }
}
