<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListIdentityResolutionJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DomainName
 * @property string|null $JobId
 * @property 'PENDING'|'PREPROCESSING'|'FIND_MATCHING'|'MERGING'|'COMPLETED'|'PARTIAL_SUCCESS'|'FAILED'|null $Status
 * @property \Aws\Api\DateTimeResult|null $JobStartTime
 * @property \Aws\Api\DateTimeResult|null $JobEndTime
 * @property JobStats|null $JobStats
 * @property ExportingLocation|null $ExportingLocation
 * @property string|null $Message
 */
class IdentityResolutionJob extends Shape
{
    /**
     * @param array{
     *     DomainName?: string|null,
     *     JobId?: string|null,
     *     Status?: 'PENDING'|'PREPROCESSING'|'FIND_MATCHING'|'MERGING'|'COMPLETED'|'PARTIAL_SUCCESS'|'FAILED'|null,
     *     JobStartTime?: \Aws\Api\DateTimeResult|null,
     *     JobEndTime?: \Aws\Api\DateTimeResult|null,
     *     JobStats?: JobStats|null,
     *     ExportingLocation?: ExportingLocation|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
