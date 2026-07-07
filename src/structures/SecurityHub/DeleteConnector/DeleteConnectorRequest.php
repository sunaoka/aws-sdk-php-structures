<?php

namespace Sunaoka\Aws\Structures\SecurityHub\DeleteConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectorId
 */
class DeleteConnectorRequest extends Request
{
    /**
     * @param array{ConnectorId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
