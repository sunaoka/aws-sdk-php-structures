<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\PauseConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectorArn
 */
class PauseConnectorRequest extends Request
{
    /**
     * @param array{connectorArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
