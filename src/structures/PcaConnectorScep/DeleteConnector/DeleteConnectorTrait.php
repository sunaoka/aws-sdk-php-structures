<?php

namespace Sunaoka\Aws\Structures\PcaConnectorScep\DeleteConnector;

trait DeleteConnectorTrait
{
    /**
     * @param DeleteConnectorRequest $args
     * @return void
     */
    public function deleteConnector(DeleteConnectorRequest $args)
    {
        parent::deleteConnector($args->toArray());
    }
}
