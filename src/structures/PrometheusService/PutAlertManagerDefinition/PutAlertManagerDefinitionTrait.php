<?php

namespace Sunaoka\Aws\Structures\PrometheusService\PutAlertManagerDefinition;

trait PutAlertManagerDefinitionTrait
{
    /**
     * @param PutAlertManagerDefinitionRequest $args
     * @return PutAlertManagerDefinitionResponse
     */
    public function putAlertManagerDefinition(PutAlertManagerDefinitionRequest $args)
    {
        $result = parent::putAlertManagerDefinition($args->toArray());
        return new PutAlertManagerDefinitionResponse($result->toArray());
    }
}
