<?php

namespace Sunaoka\Aws\Structures\DataZone\ListProjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string $createdBy
 * @property string|null $description
 * @property string $domainId
 * @property string|null $domainUnitId
 * @property list<ProjectDeletionError>|null $failureReasons
 * @property string $id
 * @property string $name
 * @property 'ACTIVE'|'DELETING'|'DELETE_FAILED'|null $projectStatus
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class ProjectSummary extends Shape
{
    /**
     * @param array{
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     createdBy: string,
     *     description?: string|null,
     *     domainId: string,
     *     domainUnitId?: string|null,
     *     failureReasons?: list<ProjectDeletionError>|null,
     *     id: string,
     *     name: string,
     *     projectStatus?: 'ACTIVE'|'DELETING'|'DELETE_FAILED'|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
