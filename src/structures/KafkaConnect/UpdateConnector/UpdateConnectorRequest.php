<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\UpdateConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\CapacityUpdate|null $capacity
 * @property array<string, string>|null $connectorConfiguration
 * @property string $connectorArn
 * @property string $currentVersion
 */
class UpdateConnectorRequest extends Request
{
    /**
     * @param array{
     *     capacity?: Shapes\CapacityUpdate|null,
     *     connectorConfiguration?: array<string, string>|null,
     *     connectorArn: string,
     *     currentVersion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
