<?php

namespace Sunaoka\Aws\Structures\DataZone\ListProjectProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $domainId
 * @property string $id
 * @property string $name
 * @property string|null $description
 * @property 'ENABLED'|'DISABLED'|null $status
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property string|null $domainUnitId
 */
class ProjectProfileSummary extends Shape
{
    /**
     * @param array{
     *     domainId: string,
     *     id: string,
     *     name: string,
     *     description?: string|null,
     *     status?: 'ENABLED'|'DISABLED'|null,
     *     createdBy: string,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     domainUnitId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
