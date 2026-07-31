<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListReports;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $serviceArn
 * @property 'FAILURE_MODE'|'TESTING'|null $reportType
 * @property string|null $testRunId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListReportsRequest extends Request
{
    /**
     * @param array{
     *     serviceArn?: string|null,
     *     reportType?: 'FAILURE_MODE'|'TESTING'|null,
     *     testRunId?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
