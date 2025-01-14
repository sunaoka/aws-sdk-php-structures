<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\UpdateConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\CapacityUpdate $capacity
 * @property array<string, string> $connectorConfiguration
 * @property string $connectorArn
 * @property string $currentVersion
 */
class UpdateConnectorRequest extends Request
{
    /**
     * @param array{
     *     capacity?: Shapes\CapacityUpdate,
     *     connectorConfiguration?: array<string, string>,
     *     connectorArn: string,
     *     currentVersion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
