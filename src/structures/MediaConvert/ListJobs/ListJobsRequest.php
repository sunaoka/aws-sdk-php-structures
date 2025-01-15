<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 20>|null $MaxResults
 * @property string|null $NextToken
 * @property 'ASCENDING'|'DESCENDING'|null $Order
 * @property string|null $Queue
 * @property 'SUBMITTED'|'PROGRESSING'|'COMPLETE'|'CANCELED'|'ERROR'|null $Status
 */
class ListJobsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 20>|null,
     *     NextToken?: string|null,
     *     Order?: 'ASCENDING'|'DESCENDING'|null,
     *     Queue?: string|null,
     *     Status?: 'SUBMITTED'|'PROGRESSING'|'COMPLETE'|'CANCELED'|'ERROR'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
