<?php

namespace Sunaoka\Aws\Structures\DataZone\ListProjectProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string $createdBy
 * @property string|null $description
 * @property string $domainId
 * @property string|null $domainUnitId
 * @property string $id
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property string $name
 * @property 'ENABLED'|'DISABLED'|null $status
 */
class ProjectProfileSummary extends Shape
{
    /**
     * @param array{
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     createdBy: string,
     *     description?: string|null,
     *     domainId: string,
     *     domainUnitId?: string|null,
     *     id: string,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     name: string,
     *     status?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
