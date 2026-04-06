<?php

namespace Sunaoka\Aws\Structures\DataZone\ListEnvironments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $awsAccountId
 * @property string|null $awsAccountRegion
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string $createdBy
 * @property string|null $description
 * @property string $domainId
 * @property string|null $environmentProfileId
 * @property string|null $id
 * @property string $name
 * @property string $projectId
 * @property string $provider
 * @property 'ACTIVE'|'CREATING'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED'|'VALIDATION_FAILED'|'SUSPENDED'|'DISABLED'|'EXPIRED'|'DELETED'|'INACCESSIBLE'|null $status
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class EnvironmentSummary extends Shape
{
    /**
     * @param array{
     *     awsAccountId?: string|null,
     *     awsAccountRegion?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     createdBy: string,
     *     description?: string|null,
     *     domainId: string,
     *     environmentProfileId?: string|null,
     *     id?: string|null,
     *     name: string,
     *     projectId: string,
     *     provider: string,
     *     status?: 'ACTIVE'|'CREATING'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED'|'VALIDATION_FAILED'|'SUSPENDED'|'DISABLED'|'EXPIRED'|'DELETED'|'INACCESSIBLE'|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
