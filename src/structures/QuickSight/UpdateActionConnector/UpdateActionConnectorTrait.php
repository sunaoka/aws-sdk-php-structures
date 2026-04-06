<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateActionConnector;

trait UpdateActionConnectorTrait
{
    /**
     * @param UpdateActionConnectorRequest $args
     * @return UpdateActionConnectorResponse
     */
    public function updateActionConnector(UpdateActionConnectorRequest $args)
    {
        $result = parent::updateActionConnector($args->toArray());
        return new UpdateActionConnectorResponse($result->toArray());
    }
}
