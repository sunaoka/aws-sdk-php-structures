<?php

namespace Sunaoka\Aws\Structures\AuditManager\ListAssessments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ACTIVE'|'INACTIVE' $status
 * @property string $nextToken
 * @property int<1, 1000> $maxResults
 */
class ListAssessmentsRequest extends Request
{
    /**
     * @param array{
     *     status?: 'ACTIVE'|'INACTIVE',
     *     nextToken?: string,
     *     maxResults?: int<1, 1000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
