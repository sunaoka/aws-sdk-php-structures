<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\UpdateAgentSpace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string|null $description
 * @property string|null $locale
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string|null $kmsKeyArn
 * @property string $agentSpaceId
 * @property array<'elevatedActionsEnabled', bool>|null $preferences
 * @property 'standalone'|'organization'|null $awsSourceMode
 */
class AgentSpace extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     locale?: string|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     kmsKeyArn?: string|null,
     *     agentSpaceId: string,
     *     preferences?: array<'elevatedActionsEnabled', bool>|null,
     *     awsSourceMode?: 'standalone'|'organization'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
