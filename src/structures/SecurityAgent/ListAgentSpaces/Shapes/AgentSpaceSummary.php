<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListAgentSpaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agentSpaceId
 * @property string $name
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class AgentSpaceSummary extends Shape
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     name: string,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
