<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableMigration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucket
 * @property ReportOverview $tableCompatibilityReport
 * @property ReportOverview $objectCompatibilityReport
 * @property ReportOverview $objectMigrationReport
 */
class MigrationOutputOverview extends Shape
{
    /**
     * @param array{
     *     bucket: string,
     *     tableCompatibilityReport: ReportOverview,
     *     objectCompatibilityReport: ReportOverview,
     *     objectMigrationReport: ReportOverview
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
