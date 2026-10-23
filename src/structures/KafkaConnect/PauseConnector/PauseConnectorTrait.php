<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\PauseConnector;

trait PauseConnectorTrait
{
    /**
     * @param PauseConnectorRequest $args
     * @return PauseConnectorResponse
     */
    public function pauseConnector(PauseConnectorRequest $args)
    {
        $result = parent::pauseConnector($args->toArray());
        return new PauseConnectorResponse($result->toArray());
    }
}
