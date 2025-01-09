<?php

namespace Sunaoka\Aws\Structures\VoiceID\ListSpeakerEnrollmentJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainId
 * @property 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'COMPLETED_WITH_ERRORS'|'FAILED' $JobStatus
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 */
class ListSpeakerEnrollmentJobsRequest extends Request
{
    /**
     * @param array{
     *     DomainId: string,
     *     JobStatus?: 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'COMPLETED_WITH_ERRORS'|'FAILED',
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
