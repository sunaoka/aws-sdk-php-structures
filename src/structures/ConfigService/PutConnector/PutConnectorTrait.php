<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutConnector;

trait PutConnectorTrait
{
    /**
     * @param PutConnectorRequest $args
     * @return PutConnectorResponse
     */
    public function putConnector(PutConnectorRequest $args)
    {
        $result = parent::putConnector($args->toArray());
        return new PutConnectorResponse($result->toArray());
    }
}
