<?php

namespace Sunaoka\Aws\Structures\DataZone\ListProjectProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string $description
 * @property string $domainId
 * @property string $domainUnitId
 * @property string $id
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property string $name
 * @property 'ENABLED'|'DISABLED' $status
 */
class ProjectProfileSummary extends Shape
{
    /**
     * @param array{
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     createdBy: string,
     *     description?: string,
     *     domainId: string,
     *     domainUnitId?: string,
     *     id: string,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult,
     *     name: string,
     *     status?: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
