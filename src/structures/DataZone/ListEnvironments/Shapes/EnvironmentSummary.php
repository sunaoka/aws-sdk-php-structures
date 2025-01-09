<?php

namespace Sunaoka\Aws\Structures\DataZone\ListEnvironments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $awsAccountId
 * @property string $awsAccountRegion
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string $description
 * @property string $domainId
 * @property string $environmentProfileId
 * @property string $id
 * @property string $name
 * @property string $projectId
 * @property string $provider
 * @property 'ACTIVE'|'CREATING'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED'|'VALIDATION_FAILED'|'SUSPENDED'|'DISABLED'|'EXPIRED'|'DELETED'|'INACCESSIBLE' $status
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class EnvironmentSummary extends Shape
{
    /**
     * @param array{
     *     awsAccountId?: string,
     *     awsAccountRegion?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     createdBy: string,
     *     description?: string,
     *     domainId: string,
     *     environmentProfileId?: string,
     *     id?: string,
     *     name: string,
     *     projectId: string,
     *     provider: string,
     *     status?: 'ACTIVE'|'CREATING'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED'|'VALIDATION_FAILED'|'SUSPENDED'|'DISABLED'|'EXPIRED'|'DELETED'|'INACCESSIBLE',
     *     updatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
