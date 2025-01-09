<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DeleteDataMigration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $NumberOfJobs
 * @property bool $CloudwatchLogsEnabled
 * @property string $SelectionRules
 */
class DataMigrationSettings extends Shape
{
    /**
     * @param array{
     *     NumberOfJobs?: int,
     *     CloudwatchLogsEnabled?: bool,
     *     SelectionRules?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
