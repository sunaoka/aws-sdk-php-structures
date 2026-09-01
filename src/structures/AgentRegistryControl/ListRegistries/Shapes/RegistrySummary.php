<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\ListRegistries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string|null $description
 * @property string $registryId
 * @property string $registryArn
 * @property DiscoveryConfiguration|null $discoveryConfiguration
 * @property 'CREATING'|'READY'|'UPDATING'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETING'|'DELETE_FAILED' $status
 * @property string|null $statusReason
 * @property AutoDetection|null $autoDetection
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class RegistrySummary extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     registryId: string,
     *     registryArn: string,
     *     discoveryConfiguration?: DiscoveryConfiguration|null,
     *     status: 'CREATING'|'READY'|'UPDATING'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETING'|'DELETE_FAILED',
     *     statusReason?: string|null,
     *     autoDetection?: AutoDetection|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
