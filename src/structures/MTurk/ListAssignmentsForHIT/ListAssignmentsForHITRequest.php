<?php

namespace Sunaoka\Aws\Structures\MTurk\ListAssignmentsForHIT;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HITId
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property list<'Submitted'|'Approved'|'Rejected'>|null $AssignmentStatuses
 */
class ListAssignmentsForHITRequest extends Request
{
    /**
     * @param array{
     *     HITId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     AssignmentStatuses?: list<'Submitted'|'Approved'|'Rejected'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
