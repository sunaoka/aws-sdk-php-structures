<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\ListResourcesByConnector;

trait ListResourcesByConnectorTrait
{
    /**
     * @param ListResourcesByConnectorRequest $args
     * @return ListResourcesByConnectorResponse
     */
    public function listResourcesByConnector(ListResourcesByConnectorRequest $args)
    {
        $result = parent::listResourcesByConnector($args->toArray());
        return new ListResourcesByConnectorResponse($result->toArray());
    }
}
