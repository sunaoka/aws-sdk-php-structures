<?php

namespace Sunaoka\Aws\Structures\Glue\GetIntegrationResourceProperty;

trait GetIntegrationResourcePropertyTrait
{
    /**
     * @param GetIntegrationResourcePropertyRequest $args
     * @return GetIntegrationResourcePropertyResponse
     */
    public function getIntegrationResourceProperty(GetIntegrationResourcePropertyRequest $args)
    {
        $result = parent::getIntegrationResourceProperty($args->toArray());
        return new GetIntegrationResourcePropertyResponse($result->toArray());
    }
}
