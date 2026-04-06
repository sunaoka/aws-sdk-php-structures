<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListProtectedJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipIdentifier
 * @property 'SUBMITTED'|'STARTED'|'CANCELLED'|'CANCELLING'|'FAILED'|'SUCCESS'|null $status
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListProtectedJobsRequest extends Request
{
    /**
     * @param array{
     *     membershipIdentifier: string,
     *     status?: 'SUBMITTED'|'STARTED'|'CANCELLED'|'CANCELLING'|'FAILED'|'SUCCESS'|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
