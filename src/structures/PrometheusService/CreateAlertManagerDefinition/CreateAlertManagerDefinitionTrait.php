<?php

namespace Sunaoka\Aws\Structures\PrometheusService\CreateAlertManagerDefinition;

trait CreateAlertManagerDefinitionTrait
{
    /**
     * @param CreateAlertManagerDefinitionRequest $args
     * @return CreateAlertManagerDefinitionResponse
     */
    public function createAlertManagerDefinition(CreateAlertManagerDefinitionRequest $args)
    {
        $result = parent::createAlertManagerDefinition($args->toArray());
        return new CreateAlertManagerDefinitionResponse($result->toArray());
    }
}
