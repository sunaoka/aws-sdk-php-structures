<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeExportTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ExportTaskIdentifier
 * @property string|null $SourceArn
 * @property list<Shapes\Filter>|null $Filters
 * @property string|null $Marker
 * @property int<20, 100>|null $MaxRecords
 * @property 'SNAPSHOT'|'CLUSTER'|null $SourceType
 */
class DescribeExportTasksRequest extends Request
{
    /**
     * @param array{
     *     ExportTaskIdentifier?: string|null,
     *     SourceArn?: string|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     Marker?: string|null,
     *     MaxRecords?: int<20, 100>|null,
     *     SourceType?: 'SNAPSHOT'|'CLUSTER'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
