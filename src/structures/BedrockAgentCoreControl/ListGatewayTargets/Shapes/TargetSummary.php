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
 * @property \Aws\Api\DateTimeResult|null $lastSynchronizedAt
 * @property AuthorizationData|null $authorizationData
 * @property 'OPEN_API_SCHEMA'|'SMITHY_MODEL'|'MCP_SERVER'|'LAMBDA'|'API_GATEWAY'|'CONNECTOR'|'AGENTCORE_RUNTIME'|'PASSTHROUGH'|'PROVIDER'|null $targetType
 * @property 'DEFAULT'|'DYNAMIC'|null $listingMode
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
     *     resourcePriority?: int<0, 1000>|null,
     *     lastSynchronizedAt?: \Aws\Api\DateTimeResult|null,
     *     authorizationData?: AuthorizationData|null,
     *     targetType?: 'OPEN_API_SCHEMA'|'SMITHY_MODEL'|'MCP_SERVER'|'LAMBDA'|'API_GATEWAY'|'CONNECTOR'|'AGENTCORE_RUNTIME'|'PASSTHROUGH'|'PROVIDER'|null,
     *     listingMode?: 'DEFAULT'|'DYNAMIC'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
