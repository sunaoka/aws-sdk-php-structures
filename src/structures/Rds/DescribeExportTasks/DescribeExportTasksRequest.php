<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeExportTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExportTaskIdentifier
 * @property string $SourceArn
 * @property list<Shapes\Filter> $Filters
 * @property string $Marker
 * @property int<20, 100> $MaxRecords
 * @property 'SNAPSHOT'|'CLUSTER' $SourceType
 */
class DescribeExportTasksRequest extends Request
{
    /**
     * @param array{
     *     ExportTaskIdentifier?: string,
     *     SourceArn?: string,
     *     Filters?: list<Shapes\Filter>,
     *     Marker?: string,
     *     MaxRecords?: int<20, 100>,
     *     SourceType?: 'SNAPSHOT'|'CLUSTER'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
