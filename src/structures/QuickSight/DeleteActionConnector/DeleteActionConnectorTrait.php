<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteActionConnector;

trait DeleteActionConnectorTrait
{
    /**
     * @param DeleteActionConnectorRequest $args
     * @return DeleteActionConnectorResponse
     */
    public function deleteActionConnector(DeleteActionConnectorRequest $args)
    {
        $result = parent::deleteActionConnector($args->toArray());
        return new DeleteActionConnectorResponse($result->toArray());
    }
}
