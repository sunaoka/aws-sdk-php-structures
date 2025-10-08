<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\GetConnector;

trait GetConnectorTrait
{
    /**
     * @param GetConnectorRequest $args
     * @return GetConnectorResponse
     */
    public function getConnector(GetConnectorRequest $args)
    {
        $result = parent::getConnector($args->toArray());
        return new GetConnectorResponse($result->toArray());
    }
}
