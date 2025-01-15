<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeReplicationTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter>|null $Filters
 * @property int|null $MaxRecords
 * @property string|null $Marker
 * @property bool|null $WithoutSettings
 */
class DescribeReplicationTasksRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null,
     *     WithoutSettings?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
