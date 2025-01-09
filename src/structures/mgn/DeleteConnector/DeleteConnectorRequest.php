<?php

namespace Sunaoka\Aws\Structures\mgn\DeleteConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectorID
 */
class DeleteConnectorRequest extends Request
{
    /**
     * @param array{connectorID: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
