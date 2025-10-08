<?php

namespace Sunaoka\Aws\Structures\PrometheusService\DeleteAlertManagerDefinition;

trait DeleteAlertManagerDefinitionTrait
{
    /**
     * @param DeleteAlertManagerDefinitionRequest $args
     * @return void
     */
    public function deleteAlertManagerDefinition(DeleteAlertManagerDefinitionRequest $args)
    {
        parent::deleteAlertManagerDefinition($args->toArray());
    }
}
