<?php

namespace Sunaoka\Aws\Structures\Sms\DisassociateConnector;

trait DisassociateConnectorTrait
{
    /**
     * @param DisassociateConnectorRequest $args
     * @return DisassociateConnectorResponse
     */
    public function disassociateConnector(DisassociateConnectorRequest $args)
    {
        $result = parent::disassociateConnector($args->toArray());
        return new DisassociateConnectorResponse($result->toArray());
    }
}
