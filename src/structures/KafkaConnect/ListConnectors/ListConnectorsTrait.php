<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\ListConnectors;

trait ListConnectorsTrait
{
    /**
     * @param ListConnectorsRequest $args
     * @return ListConnectorsResponse
     */
    public function listConnectors(ListConnectorsRequest $args)
    {
        $result = parent::listConnectors($args->toArray());
        return new ListConnectorsResponse($result->toArray());
    }
}
