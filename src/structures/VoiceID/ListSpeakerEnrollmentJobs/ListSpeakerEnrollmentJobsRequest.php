<?php

namespace Sunaoka\Aws\Structures\VoiceID\ListSpeakerEnrollmentJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainId
 * @property 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'COMPLETED_WITH_ERRORS'|'FAILED'|null $JobStatus
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListSpeakerEnrollmentJobsRequest extends Request
{
    /**
     * @param array{
     *     DomainId: string,
     *     JobStatus?: 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'COMPLETED_WITH_ERRORS'|'FAILED'|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
