<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListThreatModels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $threatModelId
 * @property string $agentSpaceId
 * @property string $title
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class ThreatModelSummary extends Shape
{
    /**
     * @param array{
     *     threatModelId: string,
     *     agentSpaceId: string,
     *     title: string,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
