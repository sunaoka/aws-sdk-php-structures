<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\DeleteConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectorArn
 * @property string|null $currentVersion
 */
class DeleteConnectorRequest extends Request
{
    /**
     * @param array{
     *     connectorArn: string,
     *     currentVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
