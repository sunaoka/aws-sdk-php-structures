<?php

namespace Sunaoka\Aws\Structures\mgn\ListNetworkMigrationExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $networkMigrationDefinitionID
 * @property string|null $networkMigrationExecutionID
 * @property 'PENDING'|'STARTED'|'SUCCEEDED'|'FAILED'|null $status
 * @property 'MAPPING'|'CODE_GENERATION'|'DEPLOY'|'DEPLOYED_STACKS_DELETION'|'ANALYZE'|null $stage
 * @property 'MAPPING'|'MAPPING_UPDATE'|'CODE_GENERATION'|'DEPLOY'|'DEPLOYED_STACKS_DELETION'|'ANALYZE'|null $activity
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property array<string, string>|null $tags
 */
class NetworkMigrationExecution extends Shape
{
    /**
     * @param array{
     *     networkMigrationDefinitionID?: string|null,
     *     networkMigrationExecutionID?: string|null,
     *     status?: 'PENDING'|'STARTED'|'SUCCEEDED'|'FAILED'|null,
     *     stage?: 'MAPPING'|'CODE_GENERATION'|'DEPLOY'|'DEPLOYED_STACKS_DELETION'|'ANALYZE'|null,
     *     activity?: 'MAPPING'|'MAPPING_UPDATE'|'CODE_GENERATION'|'DEPLOY'|'DEPLOYED_STACKS_DELETION'|'ANALYZE'|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
