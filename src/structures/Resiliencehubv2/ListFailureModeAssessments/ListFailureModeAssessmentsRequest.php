<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListFailureModeAssessments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceArn
 * @property list<'NOT_STARTED'|'PENDING'|'IN_PROGRESS'|'FAILED'|'SUCCESS'>|null $assessmentStatuses
 * @property \Aws\Api\DateTimeResult|null $startedAfter
 * @property \Aws\Api\DateTimeResult|null $endedBefore
 * @property 'STARTED_AT'|null $sortBy
 * @property 'ASC'|'DESC'|null $sortOrder
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListFailureModeAssessmentsRequest extends Request
{
    /**
     * @param array{
     *     serviceArn: string,
     *     assessmentStatuses?: list<'NOT_STARTED'|'PENDING'|'IN_PROGRESS'|'FAILED'|'SUCCESS'>|null,
     *     startedAfter?: \Aws\Api\DateTimeResult|null,
     *     endedBefore?: \Aws\Api\DateTimeResult|null,
     *     sortBy?: 'STARTED_AT'|null,
     *     sortOrder?: 'ASC'|'DESC'|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
