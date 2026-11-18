<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\GetConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectorIdentifier
 */
class GetConnectorRequest extends Request
{
    /**
     * @param array{ConnectorIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
