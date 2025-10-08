<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\DeleteConnector;

trait DeleteConnectorTrait
{
    /**
     * @param DeleteConnectorRequest $args
     * @return DeleteConnectorResponse
     */
    public function deleteConnector(DeleteConnectorRequest $args)
    {
        $result = parent::deleteConnector($args->toArray());
        return new DeleteConnectorResponse($result->toArray());
    }
}
