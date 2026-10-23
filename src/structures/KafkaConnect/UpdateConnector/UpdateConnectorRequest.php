<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\UpdateConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\CapacityUpdate|null $capacity
 * @property array<string, string>|null $connectorConfiguration
 * @property bool|null $skipHealthValidation
 * @property string $connectorArn
 * @property string $currentVersion
 */
class UpdateConnectorRequest extends Request
{
    /**
     * @param array{
     *     capacity?: Shapes\CapacityUpdate|null,
     *     connectorConfiguration?: array<string, string>|null,
     *     skipHealthValidation?: bool|null,
     *     connectorArn: string,
     *     currentVersion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
