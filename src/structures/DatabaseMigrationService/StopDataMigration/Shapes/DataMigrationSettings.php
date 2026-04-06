<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\StopDataMigration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $NumberOfJobs
 * @property bool|null $CloudwatchLogsEnabled
 * @property string|null $SelectionRules
 */
class DataMigrationSettings extends Shape
{
    /**
     * @param array{
     *     NumberOfJobs?: int|null,
     *     CloudwatchLogsEnabled?: bool|null,
     *     SelectionRules?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
