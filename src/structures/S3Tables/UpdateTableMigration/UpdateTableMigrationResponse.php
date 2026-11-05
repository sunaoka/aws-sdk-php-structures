<?php

namespace Sunaoka\Aws\Structures\S3Tables\UpdateTableMigration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $migrationId
 * @property 'new'|'planning'|'pendingReview'|'queued'|'migrating'|'succeeded'|'failed'|'cancelling'|'cancelled' $state
 * @property string|null $tableARN
 */
class UpdateTableMigrationResponse extends Response
{
}
