<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\DeleteConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectorArn
 * @property string $currentVersion
 */
class DeleteConnectorRequest extends Request
{
    /**
     * @param array{
     *     connectorArn: string,
     *     currentVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
