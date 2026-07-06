<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\ListMigrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $migrationId
 * @property string|null $status
 * @property string|null $applicationId
 * @property MigrationSource|null $source
 * @property int|null $exportedCount
 * @property int|null $importedCount
 * @property MigrationError|null $error
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class MigrationSummary extends Shape
{
    /**
     * @param array{
     *     migrationId?: string|null,
     *     status?: string|null,
     *     applicationId?: string|null,
     *     source?: MigrationSource|null,
     *     exportedCount?: int|null,
     *     importedCount?: int|null,
     *     error?: MigrationError|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
