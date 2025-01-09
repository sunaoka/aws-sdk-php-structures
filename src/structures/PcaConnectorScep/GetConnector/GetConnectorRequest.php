<?php

namespace Sunaoka\Aws\Structures\PcaConnectorScep\GetConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectorArn
 */
class GetConnectorRequest extends Request
{
    /**
     * @param array{ConnectorArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
