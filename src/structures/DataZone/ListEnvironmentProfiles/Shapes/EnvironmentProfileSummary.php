<?php

namespace Sunaoka\Aws\Structures\DataZone\ListEnvironmentProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $domainId
 * @property string|null $awsAccountId
 * @property string|null $awsAccountRegion
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string $name
 * @property string|null $description
 * @property string $environmentBlueprintId
 * @property string|null $projectId
 */
class EnvironmentProfileSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     domainId: string,
     *     awsAccountId?: string|null,
     *     awsAccountRegion?: string|null,
     *     createdBy: string,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     name: string,
     *     description?: string|null,
     *     environmentBlueprintId: string,
     *     projectId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
