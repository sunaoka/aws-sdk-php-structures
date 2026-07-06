<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\GetMigration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $migrationId
 * @property string|null $status
 * @property string|null $applicationId
 * @property Shapes\MigrationSource|null $source
 * @property int|null $exportedCount
 * @property int|null $importedCount
 * @property Shapes\MigrationError|null $error
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class GetMigrationResponse extends Response
{
}
