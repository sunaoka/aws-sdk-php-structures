<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\StartDataCollectionByAgentIds\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $agentId
 * @property bool|null $operationSucceeded
 * @property string|null $description
 */
class AgentConfigurationStatus extends Shape
{
    /**
     * @param array{
     *     agentId?: string|null,
     *     operationSucceeded?: bool|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
