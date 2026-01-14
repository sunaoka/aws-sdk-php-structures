<?php

namespace Sunaoka\Aws\Structures\DataZone\ListProjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $domainId
 * @property string $id
 * @property string $name
 * @property string|null $description
 * @property 'ACTIVE'|'DELETING'|'DELETE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'MOVING'|null $projectStatus
 * @property list<ProjectDeletionError>|null $failureReasons
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $domainUnitId
 */
class ProjectSummary extends Shape
{
    /**
     * @param array{
     *     domainId: string,
     *     id: string,
     *     name: string,
     *     description?: string|null,
     *     projectStatus?: 'ACTIVE'|'DELETING'|'DELETE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'MOVING'|null,
     *     failureReasons?: list<ProjectDeletionError>|null,
     *     createdBy: string,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     domainUnitId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
