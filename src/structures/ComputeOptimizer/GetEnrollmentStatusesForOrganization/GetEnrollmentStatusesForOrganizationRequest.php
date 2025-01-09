<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetEnrollmentStatusesForOrganization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\EnrollmentFilter> $filters
 * @property string $nextToken
 * @property int<0, 1000> $maxResults
 */
class GetEnrollmentStatusesForOrganizationRequest extends Request
{
    /**
     * @param array{
     *     filters?: list<Shapes\EnrollmentFilter>,
     *     nextToken?: string,
     *     maxResults?: int<0, 1000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
