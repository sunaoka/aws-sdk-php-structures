<?php

namespace Sunaoka\Aws\Structures\MediaConvert\SearchJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InputFile
 * @property int<1, 20> $MaxResults
 * @property string $NextToken
 * @property 'ASCENDING'|'DESCENDING' $Order
 * @property string $Queue
 * @property 'SUBMITTED'|'PROGRESSING'|'COMPLETE'|'CANCELED'|'ERROR' $Status
 */
class SearchJobsRequest extends Request
{
    /**
     * @param array{
     *     InputFile?: string,
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
