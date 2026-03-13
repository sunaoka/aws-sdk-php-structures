<?php

namespace Sunaoka\Aws\Structures\mgn\ListNetworkMigrationMappings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $jobID
 * @property string|null $networkMigrationExecutionID
 * @property string|null $networkMigrationDefinitionID
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $endedAt
 * @property 'PENDING'|'STARTED'|'SUCCEEDED'|'FAILED'|null $status
 * @property string|null $statusDetails
 */
class NetworkMigrationMappingJobDetails extends Shape
{
    /**
     * @param array{
     *     jobID?: string|null,
     *     networkMigrationExecutionID?: string|null,
     *     networkMigrationDefinitionID?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     endedAt?: \Aws\Api\DateTimeResult|null,
     *     status?: 'PENDING'|'STARTED'|'SUCCEEDED'|'FAILED'|null,
     *     statusDetails?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
