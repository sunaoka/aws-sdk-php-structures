<?php

namespace Sunaoka\Aws\Structures\DataZone\ListEnvironments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $projectId
 * @property string|null $id
 * @property string $domainId
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string $name
 * @property string|null $description
 * @property string|null $environmentProfileId
 * @property string|null $awsAccountId
 * @property string|null $awsAccountRegion
 * @property string $provider
 * @property 'ACTIVE'|'CREATING'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED'|'VALIDATION_FAILED'|'SUSPENDED'|'DISABLED'|'EXPIRED'|'DELETED'|'INACCESSIBLE'|null $status
 * @property string|null $environmentConfigurationId
 */
class EnvironmentSummary extends Shape
{
    /**
     * @param array{
     *     projectId: string,
     *     id?: string|null,
     *     domainId: string,
     *     createdBy: string,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     name: string,
     *     description?: string|null,
     *     environmentProfileId?: string|null,
     *     awsAccountId?: string|null,
     *     awsAccountRegion?: string|null,
     *     provider: string,
     *     status?: 'ACTIVE'|'CREATING'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED'|'VALIDATION_FAILED'|'SUSPENDED'|'DISABLED'|'EXPIRED'|'DELETED'|'INACCESSIBLE'|null,
     *     environmentConfigurationId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
