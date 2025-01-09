<?php

namespace Sunaoka\Aws\Structures\Sms\DisassociateConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectorId
 */
class DisassociateConnectorRequest extends Request
{
    /**
     * @param array{connectorId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
