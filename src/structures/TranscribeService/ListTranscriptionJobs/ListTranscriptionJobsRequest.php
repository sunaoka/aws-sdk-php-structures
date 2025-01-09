<?php

namespace Sunaoka\Aws\Structures\TranscribeService\ListTranscriptionJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'QUEUED'|'IN_PROGRESS'|'FAILED'|'COMPLETED' $Status
 * @property string $JobNameContains
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class ListTranscriptionJobsRequest extends Request
{
    /**
     * @param array{
     *     Status?: 'QUEUED'|'IN_PROGRESS'|'FAILED'|'COMPLETED',
     *     JobNameContains?: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
