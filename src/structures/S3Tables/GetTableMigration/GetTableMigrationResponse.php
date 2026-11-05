<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableMigration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $migrationId
 * @property string $tableBucketARN
 * @property string $namespace
 * @property string|null $tableARN
 * @property string $name
 * @property 'start'|'sync' $type
 * @property 'new'|'planning'|'pendingReview'|'queued'|'migrating'|'succeeded'|'failed'|'cancelling'|'cancelled' $state
 * @property string $roleARN
 * @property bool $reviewMigrationPlan
 * @property bool|null $hasValidPlan
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $stateUpdatedAt
 * @property Shapes\MigrationFailureReason|null $failureReason
 * @property Shapes\PlanningStats|null $planningStats
 * @property Shapes\MigrationStats|null $migrationStats
 * @property 'glueTable' $sourceType
 * @property Shapes\SourceConfiguration $source
 * @property Shapes\DataMigrationOverview $dataMigration
 * @property Shapes\MigrationOutputOverview $migrationOutput
 */
class GetTableMigrationResponse extends Response
{
}
