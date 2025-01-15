<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetEnrollmentStatusesForOrganization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\EnrollmentFilter>|null $filters
 * @property string|null $nextToken
 * @property int<0, 1000>|null $maxResults
 */
class GetEnrollmentStatusesForOrganizationRequest extends Request
{
    /**
     * @param array{
     *     filters?: list<Shapes\EnrollmentFilter>|null,
     *     nextToken?: string|null,
     *     maxResults?: int<0, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
