<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\DeleteConnector;

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
