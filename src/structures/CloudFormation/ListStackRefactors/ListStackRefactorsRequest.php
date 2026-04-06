<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListStackRefactors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<'UNAVAILABLE'|'AVAILABLE'|'OBSOLETE'|'EXECUTE_IN_PROGRESS'|'EXECUTE_COMPLETE'|'EXECUTE_FAILED'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_COMPLETE'|'ROLLBACK_FAILED'>|null $ExecutionStatusFilter
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListStackRefactorsRequest extends Request
{
    /**
     * @param array{
     *     ExecutionStatusFilter?: list<'UNAVAILABLE'|'AVAILABLE'|'OBSOLETE'|'EXECUTE_IN_PROGRESS'|'EXECUTE_COMPLETE'|'EXECUTE_FAILED'|'ROLLBACK_IN_PROGRESS'|'ROLLBACK_COMPLETE'|'ROLLBACK_FAILED'>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
