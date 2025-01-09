<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListProtectedQueries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipIdentifier
 * @property 'SUBMITTED'|'STARTED'|'CANCELLED'|'CANCELLING'|'FAILED'|'SUCCESS'|'TIMED_OUT' $status
 * @property string $nextToken
 * @property int<1, 100> $maxResults
 */
class ListProtectedQueriesRequest extends Request
{
    /**
     * @param array{
     *     membershipIdentifier: string,
     *     status?: 'SUBMITTED'|'STARTED'|'CANCELLED'|'CANCELLING'|'FAILED'|'SUCCESS'|'TIMED_OUT',
     *     nextToken?: string,
     *     maxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
