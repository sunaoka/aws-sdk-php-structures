<?php

namespace Sunaoka\Aws\Structures\AuditManager\ListAssessments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ACTIVE'|'INACTIVE'|null $status
 * @property string|null $nextToken
 * @property int<1, 1000>|null $maxResults
 */
class ListAssessmentsRequest extends Request
{
    /**
     * @param array{
     *     status?: 'ACTIVE'|'INACTIVE'|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
