<?php

namespace Sunaoka\Aws\Structures\DataZone\ListEnvironmentProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $awsAccountId
 * @property string $awsAccountRegion
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string $description
 * @property string $domainId
 * @property string $environmentBlueprintId
 * @property string $id
 * @property string $name
 * @property string $projectId
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class EnvironmentProfileSummary extends Shape
{
    /**
     * @param array{
     *     awsAccountId?: string,
     *     awsAccountRegion?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     createdBy: string,
     *     description?: string,
     *     domainId: string,
     *     environmentBlueprintId: string,
     *     id: string,
     *     name: string,
     *     projectId?: string,
     *     updatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
