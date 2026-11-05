<?php

namespace Sunaoka\Aws\Structures\S3Tables\ListTableMigrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $migrationId
 * @property string $tableBucketARN
 * @property string $namespace
 * @property string|null $tableARN
 * @property string $name
 * @property 'start'|'sync' $type
 * @property 'new'|'planning'|'pendingReview'|'queued'|'migrating'|'succeeded'|'failed'|'cancelling'|'cancelled' $state
 * @property bool|null $hasValidPlan
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $stateUpdatedAt
 */
class MigrationSummary extends Shape
{
    /**
     * @param array{
     *     migrationId: string,
     *     tableBucketARN: string,
     *     namespace: string,
     *     tableARN?: string|null,
     *     name: string,
     *     type: 'start'|'sync',
     *     state: 'new'|'planning'|'pendingReview'|'queued'|'migrating'|'succeeded'|'failed'|'cancelling'|'cancelled',
     *     hasValidPlan?: bool|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     stateUpdatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
