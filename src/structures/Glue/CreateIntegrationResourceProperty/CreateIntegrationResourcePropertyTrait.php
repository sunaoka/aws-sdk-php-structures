<?php

namespace Sunaoka\Aws\Structures\Glue\CreateIntegrationResourceProperty;

trait CreateIntegrationResourcePropertyTrait
{
    /**
     * @param CreateIntegrationResourcePropertyRequest $args
     * @return CreateIntegrationResourcePropertyResponse
     */
    public function createIntegrationResourceProperty(CreateIntegrationResourcePropertyRequest $args)
    {
        $result = parent::createIntegrationResourceProperty($args->toArray());
        return new CreateIntegrationResourcePropertyResponse($result->toArray());
    }
}
