<?php

namespace Sunaoka\Aws\Structures\AuditManager\ListAssessments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ACTIVE'|'INACTIVE' $status
 * @property string $nextToken
 * @property int $maxResults
 */
class ListAssessmentsRequest extends Request
{
    /**
     * @param array{
     *     status?: 'ACTIVE'|'INACTIVE',
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
