<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListDiscoveredEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $uri
 * @property string $pentestJobId
 * @property string $taskId
 * @property string $agentSpaceId
 * @property string|null $evidence
 * @property string|null $operation
 * @property string|null $description
 */
class DiscoveredEndpoint extends Shape
{
    /**
     * @param array{
     *     uri: string,
     *     pentestJobId: string,
     *     taskId: string,
     *     agentSpaceId: string,
     *     evidence?: string|null,
     *     operation?: string|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
