<?php

namespace Sunaoka\Aws\Structures\ConfigService\DeleteConnector;

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
