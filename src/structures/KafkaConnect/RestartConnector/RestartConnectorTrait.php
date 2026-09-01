<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\RestartConnector;

trait RestartConnectorTrait
{
    /**
     * @param RestartConnectorRequest $args
     * @return RestartConnectorResponse
     */
    public function restartConnector(RestartConnectorRequest $args)
    {
        $result = parent::restartConnector($args->toArray());
        return new RestartConnectorResponse($result->toArray());
    }
}
