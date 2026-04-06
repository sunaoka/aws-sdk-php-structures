<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\DeleteCloudConnector;

trait DeleteCloudConnectorTrait
{
    /**
     * @param DeleteCloudConnectorRequest $args
     * @return void
     */
    public function deleteCloudConnector(DeleteCloudConnectorRequest $args)
    {
        parent::deleteCloudConnector($args->toArray());
    }
}
