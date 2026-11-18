<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\CreateConnector;

trait CreateConnectorTrait
{
    /**
     * @param CreateConnectorRequest $args
     * @return CreateConnectorResponse
     */
    public function createConnector(CreateConnectorRequest $args)
    {
        $result = parent::createConnector($args->toArray());
        return new CreateConnectorResponse($result->toArray());
    }
}
