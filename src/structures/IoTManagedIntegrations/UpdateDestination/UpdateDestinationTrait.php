<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\UpdateDestination;

trait UpdateDestinationTrait
{
    /**
     * @param UpdateDestinationRequest $args
     * @return void
     */
    public function updateDestination(UpdateDestinationRequest $args)
    {
        parent::updateDestination($args->toArray());
    }
}
