<?php

namespace Sunaoka\Aws\Structures\Appflow\RegisterConnector;

trait RegisterConnectorTrait
{
    /**
     * @param RegisterConnectorRequest $args
     * @return RegisterConnectorResponse
     */
    public function registerConnector(RegisterConnectorRequest $args)
    {
        $result = parent::registerConnector($args->toArray());
        return new RegisterConnectorResponse($result->toArray());
    }
}
