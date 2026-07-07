<?php

namespace Sunaoka\Aws\Structures\SecurityHub\UpdateConnector;

trait UpdateConnectorTrait
{
    /**
     * @param UpdateConnectorRequest $args
     * @return UpdateConnectorResponse
     */
    public function updateConnector(UpdateConnectorRequest $args)
    {
        $result = parent::updateConnector($args->toArray());
        return new UpdateConnectorResponse($result->toArray());
    }
}
