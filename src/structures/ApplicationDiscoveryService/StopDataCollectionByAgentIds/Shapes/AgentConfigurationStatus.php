<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\StopDataCollectionByAgentIds\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agentId
 * @property bool $operationSucceeded
 * @property string $description
 */
class AgentConfigurationStatus extends Shape
{
    /**
     * @param array{
     *     agentId?: string,
     *     operationSucceeded?: bool,
     *     description?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
