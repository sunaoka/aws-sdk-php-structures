<?php

namespace Sunaoka\Aws\Structures\CodeBuild\ListReports;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ASCENDING'|'DESCENDING' $sortOrder
 * @property string $nextToken
 * @property int<1, 100> $maxResults
 * @property Shapes\ReportFilter $filter
 */
class ListReportsRequest extends Request
{
    /**
     * @param array{
     *     sortOrder?: 'ASCENDING'|'DESCENDING',
     *     nextToken?: string,
     *     maxResults?: int<1, 100>,
     *     filter?: Shapes\ReportFilter
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
