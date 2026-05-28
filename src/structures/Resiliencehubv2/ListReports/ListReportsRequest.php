<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListReports;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $serviceArn
 * @property 'FAILURE_MODE'|null $reportType
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListReportsRequest extends Request
{
    /**
     * @param array{
     *     serviceArn?: string|null,
     *     reportType?: 'FAILURE_MODE'|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
