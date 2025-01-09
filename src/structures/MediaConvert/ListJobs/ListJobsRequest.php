<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 20> $MaxResults
 * @property string $NextToken
 * @property 'ASCENDING'|'DESCENDING' $Order
 * @property string $Queue
 * @property 'SUBMITTED'|'PROGRESSING'|'COMPLETE'|'CANCELED'|'ERROR' $Status
 */
class ListJobsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 20>,
     *     NextToken?: string,
     *     Order?: 'ASCENDING'|'DESCENDING',
     *     Queue?: string,
     *     Status?: 'SUBMITTED'|'PROGRESSING'|'COMPLETE'|'CANCELED'|'ERROR'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
