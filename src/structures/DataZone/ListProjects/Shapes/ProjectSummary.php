<?php

namespace Sunaoka\Aws\Structures\DataZone\ListProjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string $description
 * @property string $domainId
 * @property string $domainUnitId
 * @property list<ProjectDeletionError> $failureReasons
 * @property string $id
 * @property string $name
 * @property 'ACTIVE'|'DELETING'|'DELETE_FAILED' $projectStatus
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class ProjectSummary extends Shape
{
    /**
     * @param array{
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     createdBy: string,
     *     description?: string,
     *     domainId: string,
     *     domainUnitId?: string,
     *     failureReasons?: list<ProjectDeletionError>,
     *     id: string,
     *     name: string,
     *     projectStatus?: 'ACTIVE'|'DELETING'|'DELETE_FAILED',
     *     updatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
