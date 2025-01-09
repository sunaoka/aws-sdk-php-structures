<?php

namespace Sunaoka\Aws\Structures\MTurk\ListAssignmentsForHIT;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HITId
 * @property string $NextToken
 * @property int $MaxResults
 * @property list<'Submitted'|'Approved'|'Rejected'> $AssignmentStatuses
 */
class ListAssignmentsForHITRequest extends Request
{
    /**
     * @param array{
     *     HITId: string,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     AssignmentStatuses?: list<'Submitted'|'Approved'|'Rejected'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
