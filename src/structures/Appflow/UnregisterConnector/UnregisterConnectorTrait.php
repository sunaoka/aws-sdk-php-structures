<?php

namespace Sunaoka\Aws\Structures\Appflow\UnregisterConnector;

trait UnregisterConnectorTrait
{
    /**
     * @param UnregisterConnectorRequest $args
     * @return UnregisterConnectorResponse
     */
    public function unregisterConnector(UnregisterConnectorRequest $args)
    {
        $result = parent::unregisterConnector($args->toArray());
        return new UnregisterConnectorResponse($result->toArray());
    }
}
