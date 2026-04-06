<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateActionConnector;

trait CreateActionConnectorTrait
{
    /**
     * @param CreateActionConnectorRequest $args
     * @return CreateActionConnectorResponse
     */
    public function createActionConnector(CreateActionConnectorRequest $args)
    {
        $result = parent::createActionConnector($args->toArray());
        return new CreateActionConnectorResponse($result->toArray());
    }
}
