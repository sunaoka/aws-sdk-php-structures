<?php

namespace Sunaoka\Aws\Structures\MediaConvert\SearchJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $InputFile
 * @property int<1, 20>|null $MaxResults
 * @property string|null $NextToken
 * @property 'ASCENDING'|'DESCENDING'|null $Order
 * @property string|null $Queue
 * @property 'SUBMITTED'|'PROGRESSING'|'COMPLETE'|'CANCELED'|'ERROR'|null $Status
 */
class SearchJobsRequest extends Request
{
    /**
     * @param array{
     *     InputFile?: string|null,
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
