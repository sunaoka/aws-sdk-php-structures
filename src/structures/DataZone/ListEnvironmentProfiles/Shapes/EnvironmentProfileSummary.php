<?php

namespace Sunaoka\Aws\Structures\DataZone\ListEnvironmentProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $awsAccountId
 * @property string|null $awsAccountRegion
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string $createdBy
 * @property string|null $description
 * @property string $domainId
 * @property string $environmentBlueprintId
 * @property string $id
 * @property string $name
 * @property string|null $projectId
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class EnvironmentProfileSummary extends Shape
{
    /**
     * @param array{
     *     awsAccountId?: string|null,
     *     awsAccountRegion?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     createdBy: string,
     *     description?: string|null,
     *     domainId: string,
     *     environmentBlueprintId: string,
     *     id: string,
     *     name: string,
     *     projectId?: string|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
