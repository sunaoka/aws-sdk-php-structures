<?php

namespace Sunaoka\Aws\Structures\CodeBuild\ListReportsForReportGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $reportGroupArn
 * @property string|null $nextToken
 * @property 'ASCENDING'|'DESCENDING'|null $sortOrder
 * @property int<1, 100>|null $maxResults
 * @property Shapes\ReportFilter|null $filter
 */
class ListReportsForReportGroupRequest extends Request
{
    /**
     * @param array{
     *     reportGroupArn: string,
     *     nextToken?: string|null,
     *     sortOrder?: 'ASCENDING'|'DESCENDING'|null,
     *     maxResults?: int<1, 100>|null,
     *     filter?: Shapes\ReportFilter|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
