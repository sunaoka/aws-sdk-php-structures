<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\DeleteConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectorArn
 */
class DeleteConnectorRequest extends Request
{
    /**
     * @param array{ConnectorArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
