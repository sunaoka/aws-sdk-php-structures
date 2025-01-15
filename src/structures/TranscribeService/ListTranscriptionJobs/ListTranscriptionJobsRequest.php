<?php

namespace Sunaoka\Aws\Structures\TranscribeService\ListTranscriptionJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'QUEUED'|'IN_PROGRESS'|'FAILED'|'COMPLETED'|null $Status
 * @property string|null $JobNameContains
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListTranscriptionJobsRequest extends Request
{
    /**
     * @param array{
     *     Status?: 'QUEUED'|'IN_PROGRESS'|'FAILED'|'COMPLETED'|null,
     *     JobNameContains?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
