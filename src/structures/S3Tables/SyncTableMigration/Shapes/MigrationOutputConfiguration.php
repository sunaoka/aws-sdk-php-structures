<?php

namespace Sunaoka\Aws\Structures\S3Tables\SyncTableMigration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucket
 * @property MigrationReportPrefixes|null $prefixes
 */
class MigrationOutputConfiguration extends Shape
{
    /**
     * @param array{
     *     bucket: string,
     *     prefixes?: MigrationReportPrefixes|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
