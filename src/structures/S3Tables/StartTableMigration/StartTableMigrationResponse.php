<?php

namespace Sunaoka\Aws\Structures\S3Tables\StartTableMigration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $migrationId
 * @property 'new'|'planning'|'pendingReview'|'queued'|'migrating'|'succeeded'|'failed'|'cancelling'|'cancelled' $state
 */
class StartTableMigrationResponse extends Response
{
}
