<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateIntegrationResourceProperty;

trait UpdateIntegrationResourcePropertyTrait
{
    /**
     * @param UpdateIntegrationResourcePropertyRequest $args
     * @return UpdateIntegrationResourcePropertyResponse
     */
    public function updateIntegrationResourceProperty(UpdateIntegrationResourcePropertyRequest $args)
    {
        $result = parent::updateIntegrationResourceProperty($args->toArray());
        return new UpdateIntegrationResourcePropertyResponse($result->toArray());
    }
}
