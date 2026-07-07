<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectorId
 */
class GetConnectorRequest extends Request
{
    /**
     * @param array{ConnectorId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
