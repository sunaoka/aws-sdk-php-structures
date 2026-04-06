<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\DeleteConnectorDestination;

trait DeleteConnectorDestinationTrait
{
    /**
     * @param DeleteConnectorDestinationRequest $args
     * @return void
     */
    public function deleteConnectorDestination(DeleteConnectorDestinationRequest $args)
    {
        parent::deleteConnectorDestination($args->toArray());
    }
}
