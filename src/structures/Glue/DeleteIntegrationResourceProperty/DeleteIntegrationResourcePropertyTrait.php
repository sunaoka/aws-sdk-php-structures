<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteIntegrationResourceProperty;

trait DeleteIntegrationResourcePropertyTrait
{
    /**
     * @param DeleteIntegrationResourcePropertyRequest $args
     * @return DeleteIntegrationResourcePropertyResponse
     */
    public function deleteIntegrationResourceProperty(DeleteIntegrationResourcePropertyRequest $args)
    {
        $result = parent::deleteIntegrationResourceProperty($args->toArray());
        return new DeleteIntegrationResourcePropertyResponse($result->toArray());
    }
}
