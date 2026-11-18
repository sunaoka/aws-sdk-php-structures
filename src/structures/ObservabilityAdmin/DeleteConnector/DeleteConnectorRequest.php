<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\DeleteConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectorIdentifier
 */
class DeleteConnectorRequest extends Request
{
    /**
     * @param array{ConnectorIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
