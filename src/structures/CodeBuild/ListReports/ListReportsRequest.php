<?php

namespace Sunaoka\Aws\Structures\CodeBuild\ListReports;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ASCENDING'|'DESCENDING'|null $sortOrder
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 * @property Shapes\ReportFilter|null $filter
 */
class ListReportsRequest extends Request
{
    /**
     * @param array{
     *     sortOrder?: 'ASCENDING'|'DESCENDING'|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     filter?: Shapes\ReportFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
