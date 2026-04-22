<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListGatewayTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $targetId
 * @property string $name
 * @property 'CREATING'|'UPDATING'|'UPDATE_UNSUCCESSFUL'|'DELETING'|'READY'|'FAILED'|'SYNCHRONIZING'|'SYNCHRONIZE_UNSUCCESSFUL'|'CREATE_PENDING_AUTH'|'UPDATE_PENDING_AUTH'|'SYNCHRONIZE_PENDING_AUTH' $status
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property int<0, 1000>|null $resourcePriority
 */
class TargetSummary extends Shape
{
    /**
     * @param array{
     *     targetId: string,
     *     name: string,
     *     status: 'CREATING'|'UPDATING'|'UPDATE_UNSUCCESSFUL'|'DELETING'|'READY'|'FAILED'|'SYNCHRONIZING'|'SYNCHRONIZE_UNSUCCESSFUL'|'CREATE_PENDING_AUTH'|'UPDATE_PENDING_AUTH'|'SYNCHRONIZE_PENDING_AUTH',
     *     description?: string|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     resourcePriority?: int<0, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
