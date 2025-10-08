<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\UpdateConnectorDestination;

trait UpdateConnectorDestinationTrait
{
    /**
     * @param UpdateConnectorDestinationRequest $args
     * @return void
     */
    public function updateConnectorDestination(UpdateConnectorDestinationRequest $args)
    {
        parent::updateConnectorDestination($args->toArray());
    }
}
