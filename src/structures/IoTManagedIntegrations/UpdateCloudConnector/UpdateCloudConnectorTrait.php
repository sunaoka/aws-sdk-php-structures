<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\UpdateCloudConnector;

trait UpdateCloudConnectorTrait
{
    /**
     * @param UpdateCloudConnectorRequest $args
     * @return void
     */
    public function updateCloudConnector(UpdateCloudConnectorRequest $args)
    {
        parent::updateCloudConnector($args->toArray());
    }
}
