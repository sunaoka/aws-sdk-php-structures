<?php

namespace Sunaoka\Aws\Structures\CodeBuild\ListReportsForReportGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $reportGroupArn
 * @property string $nextToken
 * @property 'ASCENDING'|'DESCENDING' $sortOrder
 * @property int $maxResults
 * @property Shapes\ReportFilter $filter
 */
class ListReportsForReportGroupRequest extends Request
{
    /**
     * @param array{
     *     reportGroupArn: string,
     *     nextToken?: string,
     *     sortOrder?: 'ASCENDING'|'DESCENDING',
     *     maxResults?: int,
     *     filter?: Shapes\ReportFilter
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
